@extends('layouts.app')

@section('content')
<div class="container">
<h3>New Job Posting</h3>
<form method="POST" action="  {{ url('jobs') }} ">

{{ csrf_field() }}
  <div class="form-group">
    <label for="inputAddress2" class="col-form-label">Subject</label>
    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
  </div>
  <div class="form-group">
    <label for="inputAddress2" class="col-form-label">Description</label>
    <textarea class="form-control" id="description" name="description" cols="30" rows="5" placeholder="About Summary"></textarea>
  </div>
  <div class="form-group">
    <label for="inputAddress2" class="col-form-label">Group Category</label>
       <select class="js-example-basic-multiple form-control" name="groups[]" multiple="multiple">                    
       </select>
  </div>
 
  <div class="form-group">
    <label for="inputAddress2" class="col-form-label">Type</label>
    <select name="type_id" id="type_id" class="form-control">
      @foreach ($types as $type)
      <option value="{{ $type->id }} ">{{ $type->name }}</option>
      @endforeach
    </select>
    <!-- <input type="text" class="form-control" id="type_id" name="type_id" placeholder="Subject"> -->
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="salary_attachment" class="col-form-label">Salary Attachment</label>
      <input type="text" class="form-control" name="salary_attachment" id="salary_attachment" placeholder="Salary Amount">
    </div>
    {{--  <div class="form-group col-md-6">
      <label for="working_hour" class="col-form-label">Working Hours</label>
      <input type="text" class="form-control" id="working_hours" name="working_hours" placeholder="Working Hours">
    </div>  --}}
  </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="salary_attachment" class="col-form-label">Start Time</label>
      <input type="time" class="form-control" name="start_working_hours" id="start_working_hours" placeholder="Start Time">
    </div>
    <div class="form-group col-md-6">
      <label for="working_hour" class="col-form-label">End Time</label>
      <input type="time" class="form-control" id="en_wordking_hours" name="end_working_hours" placeholder="End Time">
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="salary_attachment" class="col-form-label">Min Years Experience</label>
      <input type="number" class="form-control" name="min_yrs_exp" id="min_yrs_exp" placeholder="Min Yrs Exp">
    </div>
    <div class="form-group col-md-6">
      <label for="working_hour" class="col-form-label">Max Years Experience</label>
      <input type="number" class="form-control" id="max_yrs_exp" name="max_yrs_exp" placeholder="Max Yrs Exp">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="col-form-label">Company</label>
      <input type="text" class="form-control" disabled  value=" {{ Auth::user()->company->name }} " id="company_name" placeholder="Name of Company">
    </div>
    <input type="hidden" class="form-control"  value=" {{ Auth::user()->company->id }} " name="company_id" id="company_id" placeholder="Email">

    <div class="form-group col-md-6">
      <label for="inputEmail4" class="col-form-label">Application Closing Date</label>
      <input type="date" class="form-control" id="closing_date" name="closing_date" placeholder="Closing date">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Create Job</button>
</form>
</div>


@endsection