<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use App\Models\Place;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::with('place')->get();
        $places = Place::all();
        return view('pages.about.index', compact('abouts', 'places'));
    }
    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->mergeIfMissing(['place_id' => 1]);

        // Validate incoming request (including poster images)
        $request->validate([
            'place_id' => 'required|exists:places,id',
            'title'        => 'required|string|max:255',
            'about_Text'   => 'required|string',
            'vision'       => 'nullable|string',
            'mision'       => 'nullable|string',
            'kvkk'         => 'nullable|string',
            'kalite_polic' => 'nullable|string',
            'poster_1'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'poster_2'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'poster_3'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'poster_4'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'poster_5'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'poster_6'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'poster_7'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'poster_8'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Prepare data array
        $data = $request->only([
            'place_id',
            'title',
            'about_Text',
            'vision',
            'mision',
            'kvkk',
            'kalite_polic'
        ]);

        // Handle each poster upload if present
        for ($i = 1; $i <= 8; $i++) {
            $key = 'poster_' . $i;
            if ($request->hasFile($key)) {
                $file = $request->file($key);
                $path = $file->store('abouts/posters', 'public');
                $data[$key] = $path;
            }
        }

        // Create the about record
        About::create($data);

        return redirect()->back()->with('success', 'About created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Düzenlenecek kaydı alın
        $record = About::findOrFail($id); // ID ile kaydı bul, yoksa 404 döndür
        $places = Place::all(); // Yerleri almak için

        // View'e `record` ve `places` değişkenlerini gönder
        return view('pages.about._edit', compact('record', 'places'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        // dd($request->all());
        $record = About::findOrFail($id);

        $request->validate([
            'title'        => 'required|string|max:255',
            'about_Text'   => 'required|string',
            'vision'       => 'nullable|string',
            'mision'       => 'nullable|string',
            'kvkk'         => 'nullable|string',
            'kalite_polic' => 'nullable|string',
            'poster_1'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'poster_2'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'poster_3'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'poster_4'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'poster_5'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'poster_6'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'poster_7'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'poster_8'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->only([
            'title',
            'about_Text',
            'vision',
            'mision',
            'kvkk',
            'kalite_polic'
        ]);

        // Handle poster file uploads if present
        for ($i = 1; $i <= 8; $i++) {
            $key = 'poster_' . $i;
            if ($request->hasFile($key)) {
                $path = $request->file($key)->store('abouts/posters', 'public');
                $data[$key] = $path;
            }
        }

        $record->update($data);

        return redirect()->back()->with('success', 'About updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Silinecek about kaydı
        $about = About::findOrFail($id);

        $about->delete();

        return redirect()->back()->with('success', 'About deleted successfully.');
    }
}
