<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Projects as ModelsProjects;
use App\Models\Room;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class projects extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $projects= ModelsProjects::all();

        // dd($projects);
        $products = Room::all();
        $contacts= SocialMedia::all();


        return view('site.projects.index',[
            // 'about_birtes' => $about_text,
            'projects' =>$projects,
            'services'=> $products,
            'contacts' => $contacts,

        ]);
        
    }



    // project details 


    public function projectdetail($slug)
    {

        $projectsdetails = ModelsProjects::withoutTrashed()
            ->where('slug', $slug)
            ->firstOrFail();

        // group rooms
        $groupedRooms = ModelsProjects::where('status', 1)
            ->orderBy('order')
            ->get()
            ->groupBy('place_id');

            $products = Room::all();

        $contacts= SocialMedia::all();



        return view('site.projects.details', [
            'projectsdetails' => $projectsdetails,
            'services'=> $products,
            'contacts' => $contacts,
            // 'attachments' => $attachments,
            // 'groupedRooms' => $groupedRooms,
            // 'allProducts' => $allProducts,
            // 'allAttachments' => $allattachments
        ]);
    }


    // end of projects details

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
