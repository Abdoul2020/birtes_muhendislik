<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\UploadImage;
use App\Models\Hour;
use App\Models\Place;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
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
        addJavascriptFile('assets/js/graf.bundle.js');

        $places = Place::where('status', 1)->get(['id', 'title']);

        $rooms = Projects::status()
            ->orderBy('order')
            ->get(['id', 'title', 'place_id', 'order', 'status']);    




        return view('pages.projectsdone.index', compact('rooms', 'places'));

    }

    public function getRooms($place_id)
    {
        $rooms = Projects::where('place_id', $place_id)->status()->orderBy('order')->get(['id', 'title', 'place_id', 'order', 'status']);
        return response()->json($rooms);
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
     * @param Request $request
     * @param Projects $room
     * @return JsonResponse
     */



    public function store(Request $request)
    {
        $datas = $request->except('_method', '_token');


        // Create a new Room instance
        $room = new Projects();
        $info = array();

    
        foreach ($request->only($room->getFillable()) as $key => $value) {
            $info[$key] = $value;
        }

        // dd($info);

        // Handle the status field
        $info['status'] = array_key_exists('status', $info) ? 1 : 0;
        $info['created_by'] = Auth::user()->id;

        $info['order'] = $info['order'] ?? 0;

        // Save the room to get an ID for image directory
        $room->fill($info)->save();

        // Image parameters and upload logic
        $params_poster = [
            "name" => "poster",
            "dir" => "uploads/rooms/{$room->id}/",
            "file" => $info["poster"] ?? null,
            "resize" => ['w' => '1060', 'h' => '656'],
            "key" => "rooms",
            "rm" => $info['poster_remove'] ?? null
        ];
        $params_banner = [
            "name" => "banner",
            "dir" => "uploads/rooms/{$room->id}/",
            "file" => $info["banner"] ?? null,
            "resize" => ['w' => '2000', 'h' => '1500'],
            "key" => "rooms",
            "rm" => $info['banner_remove'] ?? null
        ];

        // $params_text_picture = [
        //     "name" => "text_picture",
        //     "dir" => "uploads/rooms/{$room->id}/",
        //     "file" => $info["text_picture"] ?? null,
        //     "resize" => ['w' => '1000', 'h' => '600'],
        //     "key" => "rooms",
        //     "rm" => $info['text_picture_remove'] ?? null
        // ];

        // Image uploading and removal logic
        if ($request->hasFile('banner') || $request['banner_remove'] == "1") {
            $info['banner'] = $this->createImage($params_banner);
        }

        // if ($request->hasFile('text_picture') || $request['text_picture_remove'] == "1") {
        //     $info['text_picture'] = $this->createImage($params_text_picture);
        // }



        if ($request->hasFile('poster') || $request['poster_remove'] == "1") {
            $info['poster'] = $this->createImage($params_poster);
        }

        // Update the room with the possibly modified info array (to include image paths)
        $room->update($info);

        session()->flash('success', "Yeni Proje başarıyla eklendi!");

        return redirect()->route('admin.projects.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return view
     */
    public function edit($id)
    {
        $room = Projects::findOrFail($id);

        // dd($room->price);

        $rooms = Projects::withoutTrashed()->get();
        $places = Place::withoutTrashed()->get();
        $hours = Hour::withoutTrashed()->get();

        return view('pages.projectsdone._edit', [
            'room' => $room,
            // 'hour' => $room->hour,
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
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $room = Projects::findOrFail($id);
        $datas = $request->except('_method', '_token');

        $info = array();
        foreach ($request->only(array_values($room->getFillable())) as $key => $value)  $info[$key] = $value;

        if (array_key_exists('status', $info)) :
            $info['status'] = 1;
        else :   $info['status'] = 0;
        endif;
        $info['updated_by'] = Auth::user()->id;

        $room->fill($info)->save();

        $params_poster = [
            "name" => "poster",
            "dir" => "uploads/rooms/$room->id/",
            "file" => $info["poster"] ?? null,
            "resize" => ['w' => '1060', 'h' => '656'],
            "key" =>  "rooms",
            "rm" => $info['poster_remove'] ?? null
        ];
        $params_banner = [
            "name" => "banner",
            "dir" => "uploads/rooms/$room->id/",
            "file" => $info["banner"] ?? null,
            "resize" => ['w' => '2000', 'h' => '1500'],
            "key" =>  "rooms",
            "rm" => $info['banner_remove'] ?? null
        ];
        $params_text_picture = [
            "name" => "text_picture",
            "dir" => "uploads/rooms/$room->id/",
            "file" => $info["text_picture"] ?? null,
            "resize" => ['w' => '1000', 'h' => '600'],
            "key" =>  "rooms",
            "rm" => $info['text_picture_remove'] ?? null
        ];


        if ($request->hasFile(key: 'banner') || $request['banner_remove'] == "1") :
            $info['banner'] = $this->createImage($params_banner);
        endif;

        if ($request->hasFile(key: 'text_picture')   || $request['text_picture_remove'] == "1") :
            $info['text_picture'] = $this->createImage($params_text_picture);
        endif;

        if ($request->hasFile(key: 'poster') || $request['poster_remove'] == "1") :
            $info['poster'] = $this->createImage($params_poster);
        endif;
        $result = $room->update($info);

        session()->flash('message', "Proje detayları güncellendi!");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $record = Projects::findOrFail($id);
        $record->deleted_at = now();
        $record->deleted_by = Auth::user()->id;
        $record->save();
        return redirect()->back();
    }
    
}
