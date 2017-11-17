@extends('layouts.app') @section('content')
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <form method="POST" action="/post/create" enctype="multipart/form-data">
        @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
        @endif
        @if(session()->has('message'))
                    <div class="alert alert-success"> 
                    {!! session('message') !!}
                    </div>
        @endif
           <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
           {{ csrf_field() }}
            <div class="form-group">
                <label for="titleInput">Title</label>
                <input type="text"  value="{{ old('title') }}" class="form-control" id="titleInput" placeholder="Title" name="title">
            </div>
            <div class="form-group">
                <label for="descriptionInput">Description</label>
                <input type="text"   value="{{ old('description') }}" class="form-control" id="descriptionInput" placeholder="Description" name="description">
            </div>

            <div class="form-group">
                <label for="exampleInputFile">Text</label>
                <textarea  value="{{ old('text') }}" class="form-control" rows="9" name="text">{{ old('text') }}</textarea>
            </div>
            <div class="form-group">
                <label for="InputFile">File input</label>
                <input type="file" id="exampleInputFile" name="file">
            </div>
            <button type="submit" class="btn btn-primary">Add Post</button>
   
        </form>

    </div>
   

</div>

</div>

@endsection