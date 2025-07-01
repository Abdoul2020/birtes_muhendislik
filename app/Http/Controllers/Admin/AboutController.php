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
        $abouts = About::with('place')->get(); // Tüm about kayıtlarını al
        $places = Place::all(); // Tüm yerleri al
        return view('pages.about.index', compact('abouts', 'places')); // Verileri view'e gönder
    }



    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Form doğrulama
        $request->validate([
            'place_id' => 'required|exists:places,id',
            'title' => 'required|string|max:255',
            'about_Text' => 'required|string',
        ]);

        // Yeni about kaydı oluştur
        About::create([
            'place_id' => $request->place_id,
            'title' => $request->title,
            'about_Text' => $request->about_Text,
        ]);

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
        // Form doğrulama
        $request->validate([
            'place_id' => 'required|exists:places,id',
            'title' => 'required|string|max:255',
            'about_Text' => 'required|string',
        ]);

        // Güncellenecek about kaydı
        $about = About::findOrFail($id);

        $about->update([
            'place_id' => $request->place_id,
            'title' => $request->title,
            'about_Text' => $request->about_Text,
        ]);

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
