<?php

namespace App\Http\Controllers\Admin\products;

use App\Http\Controllers\Controller;
use App\Models\Place;
use App\Models\Room;
use Illuminate\Http\Request;

class kulevinController extends Controller
{
    public function index()
    {
        addJavascriptFile('assets/js/graf.bundle.js');
        addJavascriptFile('assets/js/graf.bundle.js');
        
        $places = Place::where('status', 1)->get(['id', 'title']);
        $rooms = Room::status()
            ->orderBy('order')
            ->get(['id', 'title', 'place_id', 'order', 'status']);

        return view('pages.rooms.index', compact('rooms', 'places'));

    }
}
