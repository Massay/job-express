@extends('layouts.app')

@section('content')
 <div class="container">
  @if($jobs->isEmpty())
    <p>No Jobs</p>
  @endif
 @foreach ($jobs as $job)
   <li>{{ $job->subject }}</li>
 @endforeach
 
 </div> 
@endsection