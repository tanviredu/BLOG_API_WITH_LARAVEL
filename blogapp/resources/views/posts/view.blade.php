@extends('welcome')

@section('content')
<div class="container">
    <div class="col-lg-8 col-md-10 mx-auto">
        <a href="{{route('all.category')}}" class="btn btn-info">ALL Category  </a>
    </div>

        <div class="row">

          <div class="col-lg-12 col-md-10 mx-auto">
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->



            <div class="container container-fluid">
                    <h2 class="post-title"><p>Category Name:{{$category->name}} </p>
                    <p>Category Slug: {{$category->slug}} </p>
                    <p>Created At: {{$category->created_at}} </p>
                    </h2>
            </div>


@endsection
