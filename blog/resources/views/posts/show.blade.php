@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>{{$post->title}}</h1>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <!-- <div class="text-center col-md-12"> -->
                            <img class="img-responsive center-block" alt=" {{$post->image}}" src="{{ asset('storage/'.$post->image)}}" alt="">
                        <!-- </div> -->
                    </div> 


                    <label for="">Description</label>
                    <p> {{$post->description}}</p>



                    <label for="">Text</label>
                    <p> {{$post->text}}</p>
                </div>
                <!-- <div class="panel-footer">
                    <span>created at</span> <span> {{ $post->created_at }}</span>

                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection