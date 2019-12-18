@extends('welcome')

@section('content')
<div class="container">
    <div class="col-lg-8 col-md-10 mx-auto">
        <a href="{{route('all.category')}}" class="btn btn-info">ALL Category  </a>
    </div>

        <div class="row">

          <div class="col-lg-8 col-md-10 mx-auto">
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            <table class="table table-hover">
                <!-- adding a foreach loop for that-->
                <tr>
                    <th>SL</th>
                    <th>Category Name</th>
                    <th>Slug Name</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <th>data</th>
                    <th>data</th>
                    <th>data</th>
                    <th>
                        <a href="" class="btn btn-info">Edit</a>
                        <a href="" class="btn btn-danger">Edit</a>
                        <a href="" class="btn btn-success">View</a>

                    </th>
                </tr>
            </table>
@endsection
