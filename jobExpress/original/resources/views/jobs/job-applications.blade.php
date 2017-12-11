@extends('layouts.app')

@section('content')

    <div class="row">
         <div class="col-md-12">
         <nav class="breadcrumb">
            <a class="breadcrumb-item" href="{{ url('home')}}">Home</a>
            <span class="breadcrumb-item active">Applications</span>
        </nav>
        </div> 
     <div class="col-md-9">
            <h4>My Applications</h4>
            <input type="text" class="form-control" placeholder="Search">
            <div class="row">
            @if($applied->isEmpty())
                      <div class="col-md-12" style="margin-top:15px">
                            <div class="alert alert-danger" role="alert">
                                No Job Applications  
                            </div>
                      </div>
            @endif
            @foreach ($applied as $job)
                <div class="col-md-11">
                     <div class="row">
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
                            <a href=" {{ route('apply',$job->id) }} " class="btn btn-sm btn-danger" style="margin-top:5px">
                             Cancel Request
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
            {{$applied->links('vendor.pagination.bootstrap-4') }}
     </div>
     <div class="col-md-3">
            <h5>Subscribe</h5>
            @foreach ($companies as $company)
                <div class="row">
                     <div class="col-md-12">
                             <span style="font-size:14px">
                                 <a href="#">{{ $company->name }}</a></span>
                             <i class="fa fa-star-o" aria-hidden="true"></i>
                     </div>
                     <div class="col-md-12">
                        <img class="rounded" style="height:35px" src="{{ asset('storage/zt_fav_48_48.png') }}" alt="img">  
                        <span style="font-size:10px"><button class="btn btn-sm btn-primary">subscribe</button></span>
                    </div>
                </div>  
            @endforeach
     </div>
     <!-- @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif -->

@endsection
