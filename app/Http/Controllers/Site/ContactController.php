<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

        $products = Room::all();


        return view('site.contact',[
        ]);
    }

    public function create($datas){

    }


}
