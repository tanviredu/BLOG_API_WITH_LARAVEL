<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //we make a function for this lets
    // make a get method
    function get(){
        return view('pages.contact');
    }

    function getForAdmin(){
        return "this is the get request for admin";
    }
}
