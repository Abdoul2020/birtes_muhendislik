<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\ReferensProject;
use App\Models\Room;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class referencespages extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $maincategories = MainCategory::all();
        // $references = ReferensProject::all();
        $maincategories_references = MainCategory::with('references')->get();
        // Convert to array if needed
        $referencesArray = $maincategories_references->toArray();
        $products = Room::all();
        $contacts= SocialMedia::all();

        //  dd($referencesArray);


        return view('site.references', [
           'maincategories'=>$referencesArray,
           'services'=> $products,
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
