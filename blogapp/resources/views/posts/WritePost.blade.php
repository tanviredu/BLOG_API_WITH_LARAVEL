@extends('welcome')

@section('content')
<div class="container">
    <div class="col-lg-8 col-md-10 mx-auto">
    <a href="{{route('add.category')}}" class="btn btn-danger">Add Category + </a>
        <a href="{{route('all.category')}}" class="btn btn-info">ALL Category  </a>
    </div>
        <div class="row">


          <div class="col-lg-8 col-md-10 mx-auto">
            <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Post Title</label>
                  <input type="text" class="form-control" placeholder="Post Title" id="name">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
            <br>
              <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                      <label>Category</label>
                      <select class="form-control" name="category_id">
                            <option>this is the first option</option>
                            <option>this is the second option</option>

                      </select>
                    </div>
                  </div>
                </br>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Post Image</label>
                  <input type="file" class="form-control">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Post Details</label>
                  <textarea rows="5" class="form-control" placeholder="Post Detail"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
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
