<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WritePostController extends Controller
{
    function WritePost(){
        return view('posts.WritePost');
    }
}
