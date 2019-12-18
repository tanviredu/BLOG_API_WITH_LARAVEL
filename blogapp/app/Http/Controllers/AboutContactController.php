<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutContactController extends Controller
{
    function about(){
        return view('about');
    }

    function contact(){
        return view('contact');
    }
}
