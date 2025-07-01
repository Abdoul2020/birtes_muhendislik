<?php

namespace App\Http\Controllers\Site\abdudhabi;

use App\Models\FAQ;
use App\Models\Blog;
use App\Models\Room;
use App\Models\About;
use App\Models\Comment;
use App\Models\Tripadvisor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeAbudhabiController extends Controller
{
    public function index()
    {
        // Fetch all rooms
        $rooms = Room::where('place_id', 2)->get();
        $allComment = Comment::all();

        $allfaq= FAQ::all();

        $allblog= Blog::where('placefor', 'dubai')->paginate(3);

        $tripreview = Tripadvisor::where('place_id', 2)->get();

        $pageAbout = About::where('place_id', 1)->first();

        // Pass the rooms to the view
        return view("site.abudhabi.homepage.index", [
            'rooms' => $rooms,
            'allComment' => $allComment,
            'allfaq'=> $allfaq,
            'allblog'=> $allblog,
            'tripreviews'=> $tripreview,
            'pageAbout'=>$pageAbout
        ]);
    }
}
