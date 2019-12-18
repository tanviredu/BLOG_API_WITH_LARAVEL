@extends('welcome')

@section('content')
<div class="container">
    <div class="col-lg-8 col-md-10 mx-auto">
            @if($errors->any())
            <div class ="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <a href="{{route('all.category')}}" class="btn btn-info">ALL Category  </a>
    </div>

        <div class="row">

          <div class="col-lg-8 col-md-10 mx-auto">
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
          <form action="{{route('store.category')}}" method="POST">
            @csrf
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Category Name</label>
                  <input type="text" class="form-control" placeholder="Category Name" name="name" id="name">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls">
                        <label>Slug Name</label>
                        <input type="text" class="form-control" placeholder="Slug Name" name="slug" id="name">
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>



              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-danger" id="sendMessageButton">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <hr>


@endsection
