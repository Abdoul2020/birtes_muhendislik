<?php

namespace App\Http\Controllers\Admin;

use App\Models\Place;
use App\Models\Tripadvisor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TripadvisorController extends Controller
{

    public function index()
    {
        $placeData = Place::select('id', 'title')->get();


        return view("pages.tripadvisor.index", [
            "data" => Tripadvisor::all(),
            "placeData" => $placeData
        ]);
    }

    public function store(Request $request)
    {
        //   dd($request->all() );

        $request->validate([
            'place_id' => 'required|exists:places,id', // place_id geçerli bir 'places' id'si olmalı
            'name' => 'required',
            'comments' => 'required',
            'images' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $review = new Tripadvisor([
            'place_id' => $request->place_id,
            'name' => $request->name,
            'comments' => $request->comments,
        ]);

        // Handle image upload
        if ($request->hasFile('images')) {
            $path = $request->file('images')->store('uploads/tripadvisor', 'public');
            $review->images = $path; // Save file path to the `images` column
        }

        $review->save();

        session()->flash('message', 'Review added successfully!');
        return redirect()->back();
    }

    public function edit($id)
{

    $record = Tripadvisor::findOrFail($id); // Bu noktada hata olabilir
    $places = Place::all();

    $placeData = $places->map(function ($place) {
        return [
            'id' => $place->id,
            'title' => $place->title,
        ];
    });

    return view('pages.tripadvisor._edit', [
        'record' => $record,
        "placeData" => $places
    ]);
}


    public function update(Request $request, $id)
{
    $request->validate([
        'place_id' => 'required|exists:places,id', // place_id geçerli bir 'places' id'si olmalı
        'name' => 'required',
        'comments' => 'required',
        'images' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $review = Tripadvisor::findOrFail($id);

    $review->update([
        'place_id' => $request->place_id,
        'name' => $request->name,
        'comments' => $request->comments,
    ]);

    // Handle image upload
    if ($request->hasFile('images')) {
        // Delete old image if it exists
        if ($review->images) {
            Storage::delete($review->images);
        }

        $path = $request->file('images')->store('uploads/tripadvisor', 'public');
        $review->images = $path; // Update file path in the `images` column
    }

    session()->flash('message', 'Review details updated successfully!');
    return redirect()->back();
}

    public function destroy($id)
    {
        $review = Tripadvisor::findOrFail($id);

        // Delete the image associated with the review if it exists
        if ($review->images) {
            Storage::delete($review->images);
        }

        // Delete the review
        $review->delete();
        session()->flash('message', 'Review deleted successfully!');
        return redirect()->back();
    }
}
