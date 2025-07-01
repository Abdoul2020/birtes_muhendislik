<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\PhotoVideo;
use App\Models\Room;
use Illuminate\Http\Request;

class productspage extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $products = Room::all();

        // $products = Room::all();
        $products = Room::where('slug', 'like', '%kule-vinc%')->get();

        $attachments = PhotoVideo::all()->groupBy('room_id');


        return view('site.kulevincler', [
            'rooms' => $products,
            'attachments' => $attachments,
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

    public function productdetail($slug)
    {
        $products = Room::withoutTrashed()
            ->where('slug', $slug)
            ->firstOrFail();

        // group rooms
        $groupedRooms = Room::where('status', 1)
            ->orderBy('order')
            ->get()
            ->groupBy('place_id');

        $attachments = PhotoVideo::all()->groupBy('room_id');

        // bring all products exept the slug
        $allProducts = Room::withoutTrashed()
            ->where('slug', '!=', $slug)
            ->get();

        $allattachments = PhotoVideo::whereIn('room_id', $allProducts->pluck('id'))->get()->groupBy('room_id');




        return view('site.products.details', [
            'rooms' => $products,
            'attachments' => $attachments,
            'groupedRooms' => $groupedRooms,
            'allProducts' => $allProducts,
            'allAttachments' => $allattachments
        ]);
    }


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
