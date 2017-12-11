@extends('layouts.app')

@section('content')
<div class="container" style="margin-bottom:20px;padding:20px">

  <div class="row justify-content-md-center">
        <div class="col-md-8">
        <h3 class="text-center">  <span class="badge badge-info"><i class="fa fa-hand-o-right" aria-hidden="true"></i> </span>Hello, please fill the form below and get ready to find your dream job! </h3>
<h4  class="alert alert-info" role="alert">Job Seeker Application</h4>
<form method="POST" action="{{ route('register') }}">
{{ csrf_field() }}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="col-form-label">Fullname</label>
      <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Fullname">
            @if ($errors->has('fullname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('fullname') }}</strong>
                    </span>
            @endif
    </div>
    <div class="form-group col-md-6">
      <label for="username" class="col-form-label">Username</label>
      <input type="text" name="username" class="form-control" id="username" placeholder="Username">
        @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
        @endif
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputEmail4" class="col-form-label">Age</label>
      <input type="text" class="form-control" name="age" id="age" placeholder="Age">
      @if ($errors->has('age'))
                    <span class="help-block">
                        <strong>{{ $errors->first('age') }}</strong>
                    </span>
        @endif
    </div>
    <div class="form-group col-md-3">
      <label for="gender" class="col-form-label">Gender</label>
        <select class="form-control"  name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        @if ($errors->has('gender'))
            <span class="help-block">
                <strong>{{ $errors->first('gender') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group col-md-3">
      <label for="gender" class="col-form-label">Email</label>
      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
      @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group col-md-4">
      <label for="address_id" class="col-form-label">Address</label>
       <select class="form-control"  name="address_id" id="address_id">
            @foreach ($addresses as $address)
                <option value="{{ $address->id }}">{{ $address->name }}</option>
            @endforeach
        </select>
        @if ($errors->has('address_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('address_id') }}</strong>
                </span>
        @endif
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="user_type_id" class="col-form-label">Type</label>
      <select class="form-control"  name="user_type_id" id="user_type_id">
            @foreach ($user_types as $user_type)
            <option value="{{ $user_type->id }}">{{ $user_type->name }}</option>
            @endforeach
      </select>
      @if ($errors->has('user_type_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('user_type_id') }}</strong>
                    </span>
        @endif
    </div>
    <div class="form-group col-md-4">
      <label for="company_id" class="col-form-label">Company</label>
        <select class="form-control" name="company_id" id="company_id">
            <option value="-1">None</option>      
                     @foreach ($companies as $company)
                          <option value="{{ $company->id }}">{{ $company->name }}</option>
                      @endforeach
        </select>  
        @if ($errors->has('company_id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('company_id') }}</strong>
                    </span>
        @endif
    </div>
    <div class="form-group col-md-4">
      <label for="gender" class="col-form-label">Phone</label>
       <input type="text" class="form-control" name="phone" id="phone">
        @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
        @endif
    </div>
  </div>
 

  <div class="form-group">
    <label for="inputAddress2" class="col-form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="password_confirmation" class="col-form-label">Confirm Password</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
  </div>
    
  <div class="form-group">
    <label for="inputAddress2" class="col-form-label">File</label>
    <input type="file" class="form-control" name="file" id="file" placeholder="File Upload">
  </div>

  <button type="submit" class="btn btn-primary">Register</button>
</form>
        </div>
  </div>
      
</div>
@endsection
