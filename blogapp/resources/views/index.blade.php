@extends('welcome')
@section('content')
<div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">

            @foreach($posts as $post)
            <div class="post-preview">
              <a href="post.html">
                <h2 class="post-title">
                  {{$post->title}}
                </h2>
            <img src="{{URL::to($post->image)}}" style="height:300px;" >
              </a>
              <p class="post-meta">Category
              <a href="#">{{$post->name}}</a>
              <hr>
               {{$post->details}}</p>
            </div>
            <hr>
            @endforeach
             <!-- Pager -->
            <div class="clearfix">
              <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
          </div>
        </div>
      </div>

      <hr>

@endsection
