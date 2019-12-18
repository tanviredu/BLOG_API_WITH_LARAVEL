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

        $validateData = $request->validate([
            'title'=> 'required|max:125',
            'details'=> 'required',
            'image'=> 'required|',

        ]);
        $data = array();
        $data['title'] = $request->title;
        $data['category_id'] = $request->category_id;
        $data['details'] = $request->details;
        $image = $request->file('image');

        if($image){
            // if there image
            // make  a random name for image
            // wegive a unique id and then
            // convert it to the hexadecimal number
            // because no dubloe name will be there
            $image_name = hexdec(uniqid());
            //now find the image extension
            $ext = strtolower($image->getClientOriginalExtension());
            // make a full image name
            $image_full_name = $image_name.".".$ext;
            // set the path of the images
            $upload_path = 'public/frontend/image/';
            // total image url
            $image_url = $upload_path.$image_full_name;
            // move the image to the folder
            $success = $image->move($upload_path,$image_full_name);
            // save the location in the database
            $data['image'] = $image_url;
            // now insert the data
            $tmp = DB::table('posts')->insert($data);
            //return response()->json($tmp);
            if($tmp){
                $notification = array(
                    "message"=>"Post inserted Successfully",
                    "alert-type"=>"success"
                );
                return Redirect()->back()->with($notification);

            }else{
                $notification = array(
                    "message"=>"Something went Wrong",
                    "alert-type"=>"error"
                );
                return Redirect()->back()->with($notification);


            }
        }else{
            DB::table('posts')->insert($data); // without the image
            $notification = array(
                "message"=>"Post inserted Successfully",
                "alert-type"=>"success"
            );
            return Redirect()->back()->with($notification);
        }
        //return response()->json($data);

    }


    function getAllPost(){
        // get all the post
        //$posts = DB::table('posts')->get();
        // you get everything from two table after joining
        // you have to filter this out we take everything from post
        // and only the category
        // table select korbo
        // kar sathe join korbo
        // abong konduita join korbo
        // ki ki select korbo


        $posts = DB::table('posts')->join('categories','posts.category_id','categories.id')->select('posts.*','categories.name')->get();
        //return response()->json($posts);

        return view('posts.allpost',compact('posts'));
    }

    function viewPost($id){
        $post = DB::table('posts')->join('categories','posts.category_id','categories.id')->select('posts.*','categories.name')->where('posts.id',$id)->first();
        //return response()->json($post);
        return view('posts.view',compact('post'));
    }


    function destroy($id){
        //return response()->json($id);
        // get the post first
        $post = DB::table('posts')->where('id',$id)->first();
        // call the image location
        $image = $post->image;
        // delete the post
        $delete = DB::table('posts')->where('id',$id)->delete();

        if($delete){
            //delete the image too
            unlink($image);
            $notification = array(
                "message"=>"Post Deleted Successfully",
                "alert-type"=>"success"
            );
            return Redirect()->back()->with($notification);

        }else{
            $notification = array(
                "message"=>"Somthing went wrong",
                "alert-type"=>"error"
            );
            return Redirect()->back()->with($notification);

        }
        //return response()->json($image);
    }



}
