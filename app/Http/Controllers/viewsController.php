<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;

class viewsController extends Controller
{
    function main(){
        return view('welcome');
    }
    function rooms(){
       $rooms = Rooms::all();

        return view('rooms', compact('rooms'));
    }
    function about(){
        return view('about');
    }
    function details(){
        return view('details');
    }
}
