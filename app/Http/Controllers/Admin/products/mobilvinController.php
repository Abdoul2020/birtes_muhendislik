<?php

namespace App\Http\Controllers\Admin\products;

use App\Http\Controllers\Controller;
use App\Models\Place;
use App\Models\Room;
use Illuminate\Http\Request;

class mobilvinController extends Controller
{

    public function index()
    {
        addJavascriptFile('assets/js/graf.bundle.js');
        addJavascriptFile('assets/js/graf.bundle.js');
        $places = Place::where('status', 1)->get(['id', 'title']);

        $rooms = Room::where('slug', 'like', '%yuetıp%')
            ->orderBy('order')
            ->get(['id', 'title', 'place_id', 'order', 'status', 'slug']);

        return view('pages.rooms.index', compact('rooms', 'places'));
    }
}
