<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\PhotoVideo;
use App\Models\Room;
use Illuminate\Http\Request;

class forklift extends Controller
{
    
    public function index()
    {

        // $products = Room::all();
        $products = Room::where('slug', 'like', '%forklift%')->get();

        $attachments = PhotoVideo::all()->groupBy('room_id');
        
        return view('site.forklift', [
            'rooms' => $products,
            'attachments' => $attachments,
        ]);
    }

}
