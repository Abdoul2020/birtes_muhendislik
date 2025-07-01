<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\PhotoVideo;
use App\Models\Room;
use Illuminate\Http\Request;

class makineparkur extends Controller
{

    public function index()
    {
        return view('',);
    }


    public function makineparkurDetails(Request $request)
    {
        $placeKey = $request->segment(3);

        $placeMap = [
            'turkiye'        => 1,
            'turkmenistan'   => 2,
            'germany'        => 3,
            'russia'         => 4,
        ];

        abort_unless(array_key_exists($placeKey, $placeMap), 404);

        $placeId = $placeMap[$placeKey];

        $rooms = Room::where('place_id', $placeId)
            ->orderBy('order')
            ->get();

        $roomIds = $rooms->pluck('id');
        $attachments = PhotoVideo::whereIn('room_id', $roomIds)->get();

        // dd($attachments);

        return view('site.makinepakur.details', compact('rooms', 'attachments', 'placeKey'));
    }
}
