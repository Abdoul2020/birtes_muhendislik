<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\HomeBanner;
use App\Models\PhotoVideo;
use App\Models\Projects;
use App\Models\Room;
use App\Models\SocialMedia;
use App\Models\Storyline;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //about text
        $about_text = About::where('place_id', 1)->first();

        //services
        $products = Room::all();
        $projects= Projects::take(4)->get();
        $references = PhotoVideo::all();

        //social media contacts
        $contacts= SocialMedia::all();



        $storyDescription = Storyline::first();

        // group rooms
        $groupedRooms = Room::where('status', 1)
            ->orderBy('order')
            ->get()
            ->groupBy('place_id');


            $homebanner= HomeBanner::all();
        

        // $attachments_mobil = PhotoVideo::all()->groupBy('room_id');

        return view('site.index', [
            'about_birtes' => $about_text,
            'services' => $products,
            'projects' => $projects,
            'references' => $references,
            'contacts' => $contacts,
            'storylinedescription'=> $storyDescription,
            'homebanner' => $homebanner
        ]);
    }
}
