@extends('layouts.app') @section('content')
<div class="container">
<div class="jumbotron jbt">
  <h1 class="text-center">Welcome to   {{ Auth::user()->name }}'s blog</h1>
  <p class="text-center">Blog that shows different houses around us</p>
  <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p> -->
</div>
    <div class="row">
            @if ($posts->isEmpty())
            <div class="text-center alert alert-danger" role="alert">
                <span class="sr-only">Error:</span> You dont have any post yet
            </div>
            @endif
    </div>
    @if (!$posts->isEmpty())
   <h1 class="text-center">My Blogs</h1>
   @endif
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <a class="panel-title" href="/posts/{{$post->id}}">{{$post->title}}</a>
                </div>
                <div class="panel-body">
                    <!-- <div class="row"> -->
                    <!-- <div class="col-md-4 img_in"> -->
                        <img class="img-responsive center-block" alt=" {{$post->image}}" src="{{ asset('storage/'.$post->image)}}" alt="">
                    <!-- </div> -->
                    <!-- </div> -->
                   
                    <div class="col-md-12">
                        <p  class="text-center"> {{str_limit($post->text, 100)}}<a class="btn" href="{{ url('/posts/'.$post->id)}}">Read More</a></p>
                    </div>

                </div>
                <div class="panel-footer">
                 created at {{$post->created_at}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
    {{ $posts->links() }}
    </div>
   
</div>
@endsection