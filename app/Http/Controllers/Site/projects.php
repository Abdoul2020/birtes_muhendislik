<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Projects as ModelsProjects;
use App\Models\Resimgalleri;
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

        $resimgalleri = Resimgalleri::where('level', $projectsdetails->id)->get();

            $products = Room::all();

        $contacts= SocialMedia::all();



        return view('site.projects.details', [
            'projectsdetails' => $projectsdetails,
            'services'=> $products,
            'contacts' => $contacts,
            'resimgalleri' => $resimgalleri,
            
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
