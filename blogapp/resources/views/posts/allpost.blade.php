@extends('welcome')

@section('content')
<div class="container">
    <div class="col-lg-8 col-md-10 mx-auto">
        <a href="{{route('write.post')}}" class="btn btn-info">Write Post</a>
    </div>

        <div class="row">

          <div class="col-lg-12 col-md-10 mx-auto">
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            <table class="table table-hover">
                <!-- adding a foreach loop for that-->
                <tr>
                    <th>SL</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>

                @foreach ($posts as $post)
                <tr>
                    <th>{{$post->id}}</th>
                    {{-- you have to make a join query here
                    you first take the main database then the database you want to join
                    and with the key of the main data base and the key of the join database and then fetch
                    --}}
                    <th>{{$post->name}}</th>
                    <th>{{$post->title}}</th>
                <th><img src="{{URL::to($post->image)}}" style="height: 40px; width: 70px;" ></th>
                    <th>
                        <!-- we have to use the URL::to() to send the id to the function -->

                        <a href="{{URL::to('delete/post/'.$post->id)}}" class="btn btn-danger">Delete</a>
                        <a href="{{URL::to('view/post/'.$post->id)}}" class="btn btn-success">View</a>

                    </th>
                </tr>
                @endforeach
            </table>
@endsection
