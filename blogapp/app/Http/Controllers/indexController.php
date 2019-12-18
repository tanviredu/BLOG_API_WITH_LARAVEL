<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class indexController extends Controller
{
    function index(){

        //fetch the data first
        $posts = DB::table('posts')->join('categories','posts.category_id','categories.id')->select('posts.*','categories.slug','categories.name')->get();
        //return response()->json($posts);
        return view('index',compact('posts'));
    }
}
