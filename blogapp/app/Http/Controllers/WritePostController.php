<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class WritePostController extends Controller
{
    function WritePost(){

        ##we pass the categories here
        $categories = DB::table('categories')->get();
        return view('posts.WritePost',compact('categories'));
        //return response()->json($categories);
    }


    function SavePost(Request $request){
        // first validate the data

       // $validateData = $request->validate([
            //'title'=> 'required|max:125',
            //'details'=> 'required',
            //'image'=> 'required|',

        //]);
        $data = array();
        $data['title'] = $request->title;
        $data['category_id'] = $request->category_id;
        $data['details'] = $request->details;
        return response()->json($data);

    }

}
