<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class AddCategoriesController extends Controller
{
    function AddCategory(){
        return view('posts.addcategory');
    }

    function storeCategory(Request $request){
        // adding validation at the first
        $validateData = $request->validate([
            "name"=> "required|unique:categories|max:25|min:4",
            "slug"=> "required|unique:categories|max:25|min:4",

        ]);

        // error handling is in the add categoris

        /// we insert the data with
        /// query builder
        $data = array();
        $data['name'] = $request->name;
        $data['slug'] = $request->slug;
        //print_r($data);
        // why there is a frontslash in front of the db
        // because the DB namespace are not in this file

        $category = DB::table('categories')->insert($data);
        if($category){
            $notification = array(
                "message"=>"Successfully inserted",
                "alert-type"=>"success"
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification = array(
                "message"=>"Something Went Wrong",
                "alert-type"=>"error"
            );
            return Redirect()->back()->with($notification);
        }

    }


    function AllCategory(){

        // take the all data
        // if you take the first data then first() method
        $categories =DB::table('categories')->get();
        //return response()->json($categories);
        return view('posts.allcategories',compact('categories'));
    }

    function destroy($id){
        #return response()->json($id);
        // delete the data usin  the id
        $category = DB::table('categories')->where('id',$id)->delete();
        //return response()->json($category);
        if($category){
            $notification = array(
                "message"=>"Successfully Deleted",
                "alert-type"=>"success"
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification = array(
                "message"=>"Something Went Wrong",
                "alert-type"=>"error"
            );
            return Redirect()->back()->with($notification);
        }

    }

    function view($id){
        $category = DB::table('categories')->where('id',$id)->first();
        return view('posts.viewcategory',compact('category'));
        //return response()->json($category);
    }
}

