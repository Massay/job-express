@extends('layouts.app')

@section('content')


<div class="container" style="margin-top:20px">

   <div class="row">
        <div class="col-md-12">
                
        <h4>Company Subscriptions </h4>
            <input type="text" class="form-control" placeholder="Search">
            <div class="row">
             @foreach ($subscriptions as $company)
               <div class="col-md-12">
                        <h6>{{  $company->name }}
                        <button class="btn btn-danger btn-sm">unsubscribe</button>
</h6>
                        
               </div>
             @endforeach
             </div>
         
           

       
        </div>


</div>


@endsection