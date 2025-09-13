<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ReservationForm;
use App\Http\Traits\UploadImage;
use App\Mail\ReservationComplated;
use Carbon\Carbon;
use App\Models\{ClientInfo, Hour, PaymentInfo, Place, Price, Room, Reservation};
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\{Factory, View};
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\{JsonResponse, RedirectResponse, Request, Response};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Jenssegers\Agent\Agent;
use Yajra\DataTables\Facades\DataTables;




class ReservationController extends Controller
{

    use UploadImage;


    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */



    public function index()
    {
        addJavascriptFile('assets/js/graf.bundle.js');

        $currentPath = request()->path();



        // Fetch necessary data
        $archives = Reservation::onlyTrashed()->orderBy('id', 'desc')->paginate(10); // Bu doğru

        $places = Place::where('status', 1)->get(['id', 'title']);
        $rooms = Room::status()->orderBy('order')->get(['id', 'title', 'place_id', 'order', 'status']);

        // Initialize arrays for Dubai and Abu Dhabi games
        $dubai = [];
        $abudhabi = [];

        // Filter rooms for Dubai and Abu Dhabi
        $rooms->each(function ($item) use (&$dubai, &$abudhabi) {
            ($item->place_id == 1) ? $dubai[] = $item : $abudhabi[] = $item;
        });

        $isDubai = Str::contains($currentPath, 'dubai');
        $isAbuDhabi = Str::contains($currentPath, 'abudhabi');
        $isToday = Str::contains($currentPath, 'today');


        // Fetch reservations based on place_id if Dubai or Abu Dhabi is in the path
        if ($isDubai || $isAbuDhabi) {

            // $placeId = $isDubai ? 1 : 2;
            // $reservations = Reservation::where('place_id', $placeId)
            //     ->withoutTrashed()
            //     ->orderBy('id', 'desc')
            //     ->get();

        } else {
            $reservations = Reservation::withoutTrashed()
                ->orderBy('id', 'desc')
                ->get();
        }

        // Filter for today's reservations if 'today' is in the path
        // if ($isToday) {
        //     $today = now()->startOfDay();
        //     $reservations = $reservations->filter(function ($reservation) use ($today) {
        //         $reservationDate = $reservation->reservation_date->startOfDay();
        //         return $reservationDate->equalTo($today);
        //     });
        // }

        // $reservations = Reservation::all();

        if ($isToday) {
            // Today at 00:00 ‑ use this as our lower boundary
            $today = now()->startOfDay();

            $reservations = $reservations->filter(function ($reservation) use ($today) {
                // Normalise each reservation’s date to its own start‑of‑day
                $reservationDate = $reservation->reservation_date->startOfDay();
                // Keep only today or any date after today
                return $reservationDate->gte($today);
            });
        }




        $hours = Hour::get();
        $clientInfo = ClientInfo::get();
        $paymentInfoDetails = PaymentInfo::get();


        $dubaiHours = [];
        $abudhabiHours = [];

        foreach ($hours as $hour) {
            if ($hour->place_id == 1) {
                $dubaiHours[] = $hour;
            } else {
                $abudhabiHours[] = $hour;
            }
        }

        return view('pages.reservation.index', [
            "reservations" => $reservations,
            "archives" => $archives,
            "rooms" => $rooms,
            "places" => $places,
            "dubaiGames" => $dubai,
            "abudhabiGames" => $abudhabi,
            "hours" => $hours,
            "clientInfos" => $clientInfo,
            "paymentInfos" => $paymentInfoDetails
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function dubai()
    {
        addJavascriptFile('assets/js/graf.bundle.js');
        $reservations = Reservation::withoutTrashed()
            ->where('place_id', 1)
            ->orderBy('id', 'desc')->get();

        $archives = Reservation::onlyTrashed()->orderBy('id', 'desc')->paginate(10); // Bu doğru


        $places = Place::where('status', 1)->get(['id', 'title']);
        $rooms = Room::status()->orderBy('order')->get(['id', 'title', 'place_id', 'order', 'status']);

        $rooms->each(function ($item) use (&$dubai, &$abudhabi) {
            ($item->place_id == 1) ? $dubai[] = $item : $abudhabi[] = $item;
        });



        $groupedReservations = $reservations->groupBy(function ($item) {
            // Group by Year/Month
            return Carbon::parse($item->reservation_date)->format('Y/m');
        });

        foreach ($groupedReservations as $date => $reservationsByDate) {
            $groupedReservations[$date] = $reservationsByDate->groupBy('room_id')
                ->map(function ($items) {
                    return $items->count();
                });
        }

        return view('pages.reservation.index', [
            "reservations" => $reservations,
            "archives" => $archives,
            "rooms" => $rooms,
            "places" => $places,
            "dubaiGames" => $dubai,
            "abudhabiGames" => $abudhabi,
            'groupedReservations' => $groupedReservations
        ]);
    }

    //dubai monthly reservation
    public function monthlylist(Request $request, $id)
    {

        $currentPath = $request->path();


        if (Str::contains($currentPath, 'tum_urunler')) {
            $placeId = 1;
        } elseif (Str::contains($currentPath, 'abudhabi')) {
            $placeId = 2;
        } else {
            // If neither dubai nor abudhabi is found in the path, you might want to handle this case.
            abort(404, 'The location in the URL is not recognized.');
        }

        // Validate and parse the year and month from the $id parameter
        if (!preg_match('/^(\d{4})-(\d{2})$/', $id, $matches)) {
            abort(404, 'Invalid date format. Expected format: YYYY-MM');
        }


        $year = $matches[1];
        $month = $matches[2];

        // Retrieve all reservations for the specified place and month
        $reservations = Reservation::withoutTrashed()
            // ->where('place_id', $placeId)
            ->whereYear('reservation_date', $year)
            ->whereMonth('reservation_date', $month)
            ->orderBy('id', 'desc')
            ->get();

        $rooms = Room::status()->orderBy('order')->get(['id', 'title', 'place_id', 'order', 'status']);

        $rooms->each(function ($item) use (&$dubai, &$abudhabi) {
            ($item->place_id == 1) ? $dubai[] = $item : $abudhabi[] = $item;
        });

        $places = Place::where('status', 1)->get(['id', 'title']);

        $archives = Reservation::onlyTrashed()->orderBy('id', 'desc')->paginate(10); // Bu doğru




        // $groupedReservations = $reservations->groupBy(function ($date) {
        //     return Carbon::parse($date->reservation_date)->format('Y-m');
        // });

        $groupedReservations = $reservations->groupBy(function ($date) {
            // First level of grouping by year and month
            return Carbon::parse($date->reservation_date)->format('Y-m');
        })->map(function ($dayGroup) {
            // Second level of grouping by the exact reservation_date within each month group
            return $dayGroup->groupBy(function ($date) {
                return Carbon::parse($date->reservation_date)->format('d-m-Y');
            });
        });




        // Pass the grouped reservations to the view
        return view('pages.reservation.monthly_details', [
            'groupedReservations' => $groupedReservations,
            "rooms" => $rooms,
            "places" => $places,
            "archives" => $archives,
        ]);
    }

    // daily reservation
    public function dailylist(Request $request)
    {

        // Determine the base path from the current request
        $basePath = Str::contains($request->path(), 'tum_urunler') ? 'dubai' : (Str::contains($request->path(), 'abudhabi') ? 'abudhabi' : null);


        // Determine place_id based on basePath
        // $placeId = $basePath === 'dubai' ? 1 : ($basePath === 'abudhabi' ? 2 : null);

        // if (!$placeId) {
        // Handle error or redirect if basePath is neither dubai nor abudhabi
        // abort(404, 'Location not recognized.');
        // }

        // Ensure the date is in the correct format (YYYY-MM-DD)
        // try {
        //     $date = Carbon::createFromFormat('d-m-Y', $id);
        // } catch (\Exception $e) {
        //     abort(400, 'Invalid date format. Expected format: YYYY-MM-DD');
        // }

        // Fetch reservations for the given date and place_id
        // $reservations = Reservation::whereDate('reservation_date', '=', $date)
        //     ->get();

        $reservations = Reservation::all();


        // $archives = Reservation::onlyTrashed()->orderBy('id', 'desc')->paginate(10); // Bu doğru



        $places = Place::where('status', 1)->get(['id', 'title']);
        $rooms = Room::status()->orderBy('order')->get(['id', 'title', 'place_id', 'order', 'status']);


        $rooms->each(function ($item) use (&$dubai, &$abudhabi) {
            ($item->place_id == 1) ? $dubai[] = $item : $abudhabi[] = $item;
        });


        $hours = Hour::get();
        $clientInfo = ClientInfo::get();

        $paymentInfoDetails = PaymentInfo::get();


        $dubaiHours = [];
        $abudhabiHours = [];

        foreach ($hours as $hour) {
            if ($hour->place_id == 1) {
                $dubaiHours[] = $hour;
            } else {
                $abudhabiHours[] = $hour;
            }
        }



        // Pass the grouped reservations to the view
        return view('pages.reservation.daily_details', [
            'reservations' => $reservations,
            // "archives" => $archives,
            "rooms" => $rooms,
            "places" => $places,
            "clientInfos" => $clientInfo,
            "paymentInfos" => $paymentInfoDetails
        ]);
    }




    public function abudhabi()
    {
        addJavascriptFile('assets/js/graf.bundle.js');
        $reservations = Reservation::withoutTrashed()
            ->where('place_id', 2)
            ->orderBy('id', 'desc')
            ->get();
        $archives = Reservation::onlyTrashed()
            ->with(['clientInfo', 'place', 'room', 'hour']) // İlişkili modelleri çekiyoruz
            ->paginate(10); // Her sayfada 10 eleman getir
        $places = Place::where('status', 1)->get(['id', 'title']);
        $rooms = Room::status()->orderBy('order')->get(['id', 'title', 'place_id', 'order', 'status']);

        $rooms->each(function ($item) use (&$dubai, &$abudhabi) {

            ($item->place_id == 1) ? $dubai[] = $item : $abudhabi[] = $item;
        });


        $groupedReservations = $reservations->groupBy(function ($item) {
            // Group by Year/Month
            return Carbon::parse($item->reservation_date)->format('Y/m');
        });

        foreach ($groupedReservations as $date => $reservationsByDate) {
            $groupedReservations[$date] = $reservationsByDate->groupBy('room_id')
                ->map(function ($items) {
                    return $items->count();
                });
        }

        return view('pages.reservation.index', [
            "reservations" => $reservations,
            "archives" => $archives,
            "rooms" => $rooms,
            "places" => $places,
            "dubaiGames" => $dubai,
            "abudhabiGames" => $abudhabi,
            'groupedReservations' => $groupedReservations
        ]);
    }


    //abudhabi monthly part
    public function abudhabimonthlylist()
    {

        return view('pages.reservation.monthly_details', []);
    }
    public function fetchArchives(Request $request)
    {
        $archives = Reservation::onlyTrashed()
            ->with(['clientInfo', 'place', 'room', 'hour']) // İlişkili modelleri çekiyoruz
            ->get()
            ->paginate(10); // Her sayfada 10 eleman getir

        // Verileri JSON formatında döndürüyoruz
        return response()->json($archives);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ReservationForm $request
     */

    public function store(ReservationForm $request)
    {
        $reservation = new Reservation();
        $client      = new ClientInfo();
        $payment     = new PaymentInfo();
        $agent       = new Agent();

        // Initialize array before assigning any values
        $reservation_info = [];
        $client_info      = [];
        $payment_info     = [];

        // Step 1: Build base reservation data from validated rules
        foreach ($request->only(array_keys($request->rules())) as $key => $value) {
            $reservation_info[$key] = $value;
        }

        // Step 2: Handle PDF upload *after* filling basic data
        if ($request->hasFile('promotion_code')) {
            $pdf = $request->file('promotion_code');
            $filename = time() . '_' . Str::random(8) . '.' . $pdf->getClientOriginalExtension();
            $path = $pdf->storeAs('uploads/promo_pdfs', $filename, 'public');
            $reservation_info['promotion_code'] = $path;
        }

        // Step 3: Process payment
        if ($reservation_info['payment_method'] == 2) {
            foreach ($request->only($payment->getFillable()) as $k => $v) {
                $payment_info[$k] = $v;
            }
        } else {
            $payment['outlet_id']  = 1;
            $payment['order_id']   = Str::random(10);
            $payment['payment_id'] = Str::random(10);
        }
        $payment->fill($payment_info)->save();
        $reservation_info['payment_info_id'] = $payment->id;

        // Step 4: Process client info
        foreach ($request->only($client->getFillable()) as $k => $v) {
            $client_info[$k] = $v;
        }
        $client_info += [
            'device'            => $agent->device(),
            'platform'          => $agent->platform(),
            'platform_version'  => $agent->version($agent->platform()),
            'browser'           => $agent->browser(),
            'browser_version'   => $agent->version($agent->browser()),
            'language'          => $agent->languages()[0] ?? null,
            'ipAddress'         => request()->ip(),
        ];
        $client->fill($client_info)->save();
        $reservation_info['client_info_id'] = $client->id;

        // Step 5: Set metadata
        $reservation_info['created_by'] = $reservation_info['updated_by'] = Auth::id();

        // Step 6: Save reservation with correct data
        $result = $reservation->fill($reservation_info)->save();

        return response()->json([
            'status'  => $result,
            'message' => 'Yeni Kiralama Başarıyla Oluşturuldu!',
            'class'   => $result ? 'info' : 'danger',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id)
    {
        $result = Reservation::withoutTrashed()->findOrFail($id);


        return response()->json([
            "result" => $result,
            "message" => $result['title'] . " bilgilerini güncellediniz!",
            "class" => ($result) ? "info" : "danger",
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return view
     */
    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        $rooms = Room::withoutTrashed()->get();
        $places = Place::withoutTrashed()->get();
        $hours = Hour::withoutTrashed()->get();

        return view('pages.reservation._edit', [
            'client' => $reservation->clientInfo,
            'reservation' => $reservation,
            'rooms' => $rooms,
            'places' => $places,
            'hours' => $hours
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {

        // Assuming $id refers to the reservation's ID
        $datas = $request->except(['_token', '_method']);

        // Ensure the client ID is valid
        if (!is_numeric($datas['client']['id']) || $datas['client']['id'] === 'default_value') {
            return back()->with('error', 'Invalid client ID.');
        }
        $client = ClientInfo::findOrFail($datas['client']['id']);
        $reservation = Reservation::findOrFail($id);

        $room = Room::findOrFail($datas['room_id']);
        if ($datas['place_id'] != $room->place_id) {
            return back()->with('error', 'City and Room should be on the same location.');
        }

        // Prepare data for update
        $clientData = $datas['client'];
        $reservationData = Arr::except($datas, ['client']);

        // Update the client and reservation
        $client->update($clientData);
        $reservation->update($reservationData);

        return back()->with('message', 'The reservation and client information has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $record = Reservation::findOrFail($id);
        $record->status = 0;
        $record->deleted_at = now();
        $record->deleted_by = Auth::user()->id;
        $record->save();
        return back()->with('message', 'The reservation  has been successfully Deleted.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return string
     */
    public function forceDelete($id)
    {
        $record = Reservation::onlyTrashed()->findOrFail($id);
        $record->forceDelete();
        return redirect()->back();
    }

    public function restore($id)
    {
        $record = Reservation::onlyTrashed()->findOrFail($id);
        $record->status = 1;
        $record->restore();
        return redirect()->back();
    }
}
