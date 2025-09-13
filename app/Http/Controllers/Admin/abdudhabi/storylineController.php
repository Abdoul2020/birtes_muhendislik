<?php

namespace App\Http\Controllers\Admin\abdudhabi;

use App\Http\Controllers\Controller;
use App\Models\abudhabi\FAQ;
use App\Models\Place;
use App\Models\Room;
use App\Models\Storyline;
use Illuminate\Http\Request;

class storylineController extends Controller
{



    public function index()
    {
        addJavascriptFile('assets/js/graf.bundle.js');
        $places = Place::where('status', 1)->get(['id', 'title']);

        $rooms = Room::status()
            ->orderBy('order')
            ->get(['id', 'title', 'place_id', 'order', 'status']);

        return view('pages.storyline.index', compact('rooms', 'places'));
    }

    //edit
    public function edit($id)
    {
       
        $storyline = Storyline::findOrFail($id);
    
        $rooms = Room::all(); 
        $places = ['Dubai', 'Abu Dhabi', 'All']; 
    
        return view('pages.storyline._edit', [
            'storyline' => $storyline,
            'rooms' => $rooms,
            'places' => $places
        ]);
    }
    




    public function store(Request $request)
    {
        $request->mergeIfMissing([
            'place_id' => '1',
            'header' => 'Default Header',
        ]);

        
    
        $validated = $request->validate([
            'header' => 'required|string|max:255',
            'header_title' => 'required|string|max:255',
            'storyline_description' => 'required|string',
            'place_id' => 'required|string',
            'room_id' => 'required|integer|exists:rooms,id',
        ]);

        
    
        $storyline = new Storyline();
        $storyline->header = $validated['header'];
        $storyline->header_title = $validated['header_title'];
        $storyline->storyline_description = $validated['storyline_description'];
        $storyline->placefor = $validated['place_id']; // Ensure this matches your database column
        $storyline->room_id = $validated['room_id'];
    
        $storyline->save();
    
        return redirect()->back()->with('success', 'Açıklama Yasızı Başarıyla Oluşturuldu.');
    }
    
    

    public function update(Request $request, Storyline $storyline, $id)
    {

        $request->mergeIfMissing([
            'place_id' => '1',
            'header' => 'Default Header',
        ]);
        
        $validatedData = $request->validate([
            'header' => 'required|string|max:255',
            'header_title' => 'required|string|max:255',
            'storyline_description' => 'required|string',
            'place_id' => 'required|string',
            'room_id' => 'required|integer',
        ]);


        $storyline = Storyline::findOrFail($id);

        // Update the storyline with validated data
        $storyline->update([
            'header' => $validatedData['header'],
            'header_title' => $validatedData['header_title'],
            'storyline_description' => $validatedData['storyline_description'],
            'placefor' => $validatedData['place_id'],
            'room_id' => $validatedData['room_id'],
        ]);


        session()->flash('message', 'Açıklama Başarıyla Güncellendi!');
        return redirect()->back();
    
        // Redirect back to the previous page with a success message
    }


    public function destroy($id)
    {
        $faq = Storyline::findOrFail($id);
        $faq->delete();

        session()->flash('message', 'Açıklama Başarıyla Silindi!');
        return redirect()->back();
    }
    



}
