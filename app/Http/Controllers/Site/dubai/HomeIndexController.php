<?php

namespace App\Http\Controllers\Site\dubai;

use App\Models\Blog;
use App\Models\Room;
use App\Models\About;
use App\Models\Comment;
use App\Models\Tripadvisor;
use App\Models\abudhabi\FAQ;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeIndexController extends Controller
{
    public function index(Request $request)
    {


          // Fetch all rooms
          $rooms = Room::where('place_id', 1)->get();
          $allComment = Comment::all();
  
          $allfaq= FAQ::all();
  
          $allblog= Blog::where('placefor', 'dubai')->orderBy('created_at', 'desc')->paginate(6);

          $tripreviews = Tripadvisor::where('place_id', 1)->get();

          $pageAbout = About::where('place_id', 1)->first();

          //if ($request->ajax()) {
          //  return view('partials._blog_posts', compact('allblog'))->render();
       // }

        //return view("site.dubai.homepage.index", [
           // 'rooms' => $rooms,
            //'allComment' => $allComment,
            //'allfaq'=> $allfaq,
            //'allblog'=> $allblog,
            //'tripreviews'=> $tripreview,
            //'pageAbout'=>$pageAbout
       // ]);

       // Always build the full view
    $view = view('site.dubai.homepage.index', [
        'rooms' => $rooms,
            'allComment' => $allComment,
            'allfaq'=> $allfaq,
            'allblog'=> $allblog,
            'tripreviews'=> $tripreviews,
            'pageAbout'=>$pageAbout
    ]);

    if ($request->ajax()) {
        // renderSections() returns an array of all Blade @sections
        $sections = $view->renderSections();
        // return only the 'blogPosts' section HTML
        return $sections['blogPosts'];
    }

    // normal page load
    return $view;
    }
}
