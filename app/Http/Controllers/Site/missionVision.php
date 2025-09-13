<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Room;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class missionVision extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $about_text = About::where('place_id', 1)->first();
        $products = Room::all();
        $contacts= SocialMedia::all();



        return view('site.kurumsal.missionvision',[
            'services'=> $products,
            'about_text'=> $about_text,
            'contacts' => $contacts,


        ]);
        
    }

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
