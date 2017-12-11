@extends('layouts.app')

@section('content')

<div class="container">
   <div class="row">
       <div class="col-md-12">
       <nav class="breadcrumb">
            <a class="breadcrumb-item" href=" {{ route('home') }}">Home</a>
            <a class="breadcrumb-item" href=" {{ url('groups') }}">Groups</a>
            <span class="breadcrumb-item active"> {{ $group->name}}</span>
           
        </nav> 
    </div>   
        <div class="col-md-12">
                
        <h4>Jobs By category {{ $group->name}} </h4>
            <input type="text" class="form-control" placeholder="Search">
            <div class="row">
            @if($group->jobs->isEmpty())
            <div class="col-md-12">
                    <div class="alert alert-primary" role="alert">
                        No Jobs available for {{  $group->name }}
                    </div>
            </div>
            @endif
            @foreach ($group->jobs as $job)
            <div class="col-md-12">
                     <div class="row" style="margin:20px 0;">
                            <div class="col-md-1">
                                <div class="text-center">
                                    <img class="rounded" style="margin:10px;height:30px" src="{{ asset('storage/zt_fav_48_48.png') }}" alt="img">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h6><a href=" {{ url('jobs',$job->id)}}">{{ $job->subject }}</a></h6>
                                <div class="row">
                                        <div class="col-md-9">
                                                <span>
                                                    @if($job->groups->isEmpty())
                                                    <span class="badge badge-danger"> None </span>
                                                    @endif
                                                    @foreach ($job->groups as $group)
                                                    <span class="badge badge-primary"> {{ $group->name }} </span>
                                                    @endforeach
                                                </span>
                                                <span>
                                                <i class="fa fa-bookmark" aria-hidden="true"> {{ $job->type->name}} </i>
                                                    </span>
                                            <span>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                {{ $job->company->address->name or $job->company->other_address }}
                                            </span>
                                        </div>
                                        <div class="col-md-3 text-right">
                                                <span>
                                                 <i title="Paid" class="text-success fa fa-money" aria-hidden="true"></i>
                                                </span>
                                                <span>
                                                <i class="text-danger fa fa-close" aria-hidden="true"></i>
                                                </span>
                                                <span>
                                                     <i class="text-primary fa fa-check" aria-hidden="true"></i>
                                                </span>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                            <a href=" {{ route('apply',$job->id) }} " class="btn btn-sm btn-primary" style="margin-top:5px">
                             Applied
                            </a>
                            </div>
                            <div class="row">
                                    <div class="col-md-12" style="margin-left:65px;margin-top:10px">
                                         <i class="fa fa-calendar" aria-hidden="true"></i>
                                         <span> {{ $job->created_at}} </span>
                                    </div>  
                            </div>
                     </div>
                </div>  
            @endforeach
         
            </div>

       
        </div>


</div>


@endsection