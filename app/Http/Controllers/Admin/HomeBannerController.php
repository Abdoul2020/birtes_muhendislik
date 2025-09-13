<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeBanner;
use App\Models\Place;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeBannerController extends Controller
{

    public function index()
    {
        // addJavascriptFile('assets/js/graf.bundle.js');
        // $places = Place::where('status', 1)->get(['id', 'title']);
        // $homebanner = HomeBanner::all();

        return view('pages.homebanner.index',);
    }


    // store the data

    public function store(Request $request)
    {


        // dd($request->all());
        $validated = $request->validate([
            'image_or_video_name' => 'required|string|max:255',
            'place_for' => 'required|string',
            'photo_img' => 'nullable|image|max:10240', // Adjust size as needed
            'video_mp4' => 'nullable|mimes:mp4|max:51200', // Adjust size as needed
        ]);

        $photoPath = null;
        $videoPath = null;

        if ($request->hasFile('photo_img')) {
            $photoPath = $request->file('photo_img')->store('storage/uploads/photos', 'public');
        }

        if ($request->hasFile('video_mp4')) {
            $videoPath = $request->file('video_mp4')->store('storage/uploads/videos', 'public');
        }

        $photoVideo = HomeBanner::create([
            'name' => $validated['image_or_video_name'],
            'placefor' => $validated['place_for'],
            'photos_img' => $photoPath,
            'videos_mp4' => $videoPath,
        ]);

        return redirect()->back()->with('success', 'Banner Başarıyla Eklendi.');
    }

    // edit

    public function edit($id)
    {



        $photovideo = HomeBanner::findOrFail($id);

        // $rooms = Room::all(); 
        // $places = ['Dubai', 'Abu Dhabi', 'All']; 

        // dd($photovideo);


        return view('pages.homebanner._edit', [
            'photovideo' => $photovideo,
            // 'rooms' => $rooms,
        ]);
    }







    // update

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'placefor' => 'required|string|in:png,mp4',
            'photo_img' => 'nullable|image',
            'video_mp4' => 'nullable|mimes:mp4',
        ]);

        $banner = HomeBanner::findOrFail($id);
        $banner->name = $request->name;
        $banner->placefor = $request->placefor;

        if ($request->hasFile('photo_img') && $request->placefor === 'png') {
            if ($banner->photos_img) {
                Storage::disk('public')->delete($banner->photos_img);
            }
            $path = $request->file('photo_img')->store('uploads/photos', 'public');
            $banner->photos_img = $path;
        }

        if ($request->hasFile('video_mp4') && $request->placefor === 'mp4') {
            if ($banner->videos_mp4) {
                Storage::disk('public')->delete($banner->videos_mp4);
            }
            $path = $request->file('video_mp4')->store('uploads/videos', 'public');
            $banner->videos_mp4 = $path;
        }

        $banner->save();

        session()->flash('message', 'Banner Bilgileri Başarıyla Güncellendi.');

        return redirect()->back();
    }




    // destory dataa
    public function destroy($id)
    {
        $photovideos = HomeBanner::findOrFail($id);
        $photovideos->delete();

        session()->flash('message', 'Photo/videos deleted successfully!');
        return redirect()->back();
    }
}
