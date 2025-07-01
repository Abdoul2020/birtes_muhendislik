<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\PhotoVideo;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {


        //places
        $places = [
            1 => 'Türkiye',
            2 => 'Türkmenistan',
            3 => 'Almanya',
            4 => 'Rusya',
        ];

        $products = Room::all();
        $attachments = PhotoVideo::all()->groupBy('room_id');


        // group rooms
        $groupedRooms = Room::where('status', 1)
            ->orderBy('order')
            ->get()
            ->groupBy('place_id');


        return view('site.index', [
            'rooms' => $products,
            'attachments' => $attachments,
            'places' => $places,
            'groupedRooms' => $groupedRooms
        ]);
    }
}
