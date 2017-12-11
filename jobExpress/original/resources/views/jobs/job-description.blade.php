@extends('layouts.app') @section('content')
<div class="container">

    <div class="row">
        
        <div class="col-md-12">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="{{ url('home')}}">Home</a>
            <span class="breadcrumb-item active">{{ $job->subject}}</span>
        </nav>
            <div class="row">
                <div class="col-md-6">
                    <h3>{{ $job->subject }}</h3>
                    <i class="fa fa-building-o" aria-hidden="true"></i>
                    <span>{{   $job->company->name }}</span>
                   
                    <div>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>{{ $job->company->address->name}}</span>
                    </div>
                    @if(@auth)
                        @if( Auth::user()->user_type_id==1)
                                @if(Auth::user()->userHasApplied($job->id)[0]['applied']->isEmpty() )
                                    <a href=" {{ route('apply',$job->id) }} " class="btn btn-sm btn-primary" style="margin-top:5px">
                                    Quick apply
                                    </a>
                                @endif
                                @foreach (Auth::user()->userHasApplied($job->id)[0]['applied'] as $appliedFor )
                                    <button class="btn btn-sm btn-light" style="margin-top:5px">
                                                    Application sent     
                                    </button>
                                @endforeach
                        @endif
                    @else
                        <a href=" {{ url('login') }} " class="btn btn-primary">Login to Apply</a>
                        <a href=" {{ url('register') }} " class="btn btn-primary">Register and Apply</a>
                    @endif
               
                </div>
                <div class="col-md-6 text-right">
                    <img height="120" width="120" src=" {{ asset('storage/pic.jpg')}} " alt="">
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-6 mb-box">
                    <div class="row">
                        <div class="col-md-6 mb-header">Experience</div>
                        <div class="col-md-6"> {{ $job->exp_yr_min }} - {{ $job->exp_yr_max . ' Yrs' }} </div>
                    </div>
                </div>
                <div class="col-md-6 mb-box">
                    <div class="row">
                        <div class="col-md-6 mb-header">Job Category</div>
                        <div class="col-md-6">
                                @if($job->groups->isEmpty())
                                     <span class="badge badge-primary">{{ 'Not Category'}}</span>
                                 @endif
                                @foreach($job->groups as $group)
                                    <span class="badge badge-primary">{{ $group->name }}</span>
                                @endforeach
                        </div>
                    </div>
    
                </div>
                
                <div class="col-md-6 mb-box">
                    <div class="row">
                        <div class="col-md-6 mb-header">Salary</div>
                        <div class="col-md-6">{{ $job->salary_attachment }}</div>
                    </div>
                </div>
                <div class="col-md-6 mb-box">
                    <div class="row">
                        <div class="col-md-6 mb-header">Apply Before</div>
                        <div class="col-md-6"> {{  $job->close_date->formatLocalized('%A, %d %B %Y') }}</div>
                    </div>
                </div>
                <div class="col-md-6 mb-box">
                    <div class="row">
                        <div class="col-md-6 mb-header">Job Type</div>
                        <div class="col-md-6"> {{ $job->type->name }} </div>
                    </div>
                </div>
                <div class="col-md-6 mb-box">
                    <div class="row">
                        <div class="col-md-6 mb-header">Posted Date</div>
                        <div class="col-md-6">{{ $job->created_at->formatLocalized('%A, %d %B %Y') }}</div>
                    </div>
                </div>

            </div>
            <hr>
            <div class="row">
                    <div class="col-md-12">
                         <h4>Job Summary</h4>
                         <p>{{  $job->description}}</p>
                    </div>
               
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <h4>Job Description</h4>
                    <ul>
                        <li>one</li>
                        <li>one</li>
                        <li>one</li>
                        <li>one</li>
                    </ul>
                </div>

            </div>
            <hr>
        </div>

    </div>
</div>
@endsection