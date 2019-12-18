<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class indexController extends Controller
{
    function index(){

        //fetch the data first
        $post = DB::table('posts')->join('categories','posts.category_id','categories.id')->select('posts.*','categories.slug','categories.name')->paginate(3);
        //return response()->json($posts);
        return view('index',compact('post'));
    }
}
