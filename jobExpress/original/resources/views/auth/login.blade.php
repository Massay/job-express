@extends('layouts.app')

@section('content')



    <example></example>
<div class="container" style="margin-top:20px">
<div class="row justify-content-md-center">
 <div class="col-md-12 text-center">
    <img src=" {{ asset('storage/Capture2.PNG') }}" alt="">
 </div> 

  <div class="col-md-5">
  <form class="form-horizontal" method="POST" action="{{ route('login') }}">
  {{ csrf_field() }}
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
      </div>
      @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
      @endif
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
      </div>
        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
        @endif
    </div>
    <fieldset class="form-group">
      
    </fieldset>
  
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </div>
  </form>
  </div>
</div>
</div>
@endsection
