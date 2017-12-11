@extends('layouts.app')
@section('content')

  <div class="container" style="margin-bottom:20px;padding:20px">
      
        

        <div class="row justify-content-md-center">
          <div class="col-md-12">
              <h3 class="text-center" >Employer Registeration </h3>
          </div>
            <div class="col-md-6">
            <form method="POST" action=" {{ url('companies') }} ">
       
            {{ csrf_field() }}
        <div class="form-group">
    <label for="inputAddress2" class="col-form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="inputAddress2" class="col-form-label">Address</label>
    <!-- <input type="text" class="form-control" id="address_id" name="address_id" placeholder="Address"> -->
    <select name="address_id" id="address_id" class="address form-control"></select>
  </div>
  <div class="form-group">
    <label for="inputAddress2" class="col-form-label">Other Address</label>
    <input type="text" class="form-control" id="other_address" name="other_address" placeholder="Address">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email" class="col-form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="country" class="col-form-label">Country</label>
      <input type="text" class="form-control" id="country" name="country" placeholder="Country">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress" class="col-form-label">About</label>
   <textarea name="about" class="form-control" id="about" cols="30" rows="10"></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary">Next Step</button>
</form>

            </div>
        </div>


  </div>    

@endsection