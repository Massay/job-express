@extends('layouts.app') @section('content')

<div class="container gutter">
    <div class="row">
        <div class="col-md-12">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href=" {{ route('home') }}">Home</a>
            <span class="breadcrumb-item active">Skills</span>
        </nav>
        </div>
        <div class="col-md-12">
            <h4>What makes you special!</h4>
            <h6>Sell yourself to the worlds</h6>
            <div class="row gutter">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row bg-primary text-light">
                        <div class="col-md-6">   
                            <h6  class="h-title">Skills</h6>
                        </div>
                        <div class="col-md-6 text-right" >
                                    <a href="#"  id="show-form-skill-add" class="btn btn-dark btn-sm add_education">
                                        <i class="fa fa-plus" aria-hidden="true"></i>   
                                    </a>
                        </div>
                    </div>      
                </div>

                <div class="col-md-12" id="form-skill-add">
                    <form action=" {{ url('#')}}" method="POST" class="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <select class="skills_list form-control"  name="skill[]" id="skills" multiple='multiple'>

                            </select>
                            <button id="add_my_skills" class="btn btn-primary" style="margin:10px 0 0 0;font-size:14px">update</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
            @foreach($skills as $skill)
            <button class="btn btn-light btn-skill-b">
            {{ $skill->name }}
                <a href="#" class="btn-skills" data-item="{{ $skill->id }}" class="btn-sm btn btn-ligh">
                    <span class="badge badge-danger">&times;</span>
                </a>

            </button>
            @endforeach
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row bg-primary" >
                        <div class="col-md-6">   
                            <h6  class="h-title text-light">Education</h6> 
                        </div>
                        <div class="col-md-6 text-right">
                                <a href="#" data-toggle="modal" data-target="#educationModal" class="btn btn-dark btn-sm add_education" id="add_education">
                                    <i class="fa fa-plus" aria-hidden="true"></i>   
                                </a>
                        </div>
                    </div>      
                </div>
                <div class="col-md-12">
                
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Institution / School</th>
                                <th>Start Year</th>
                                <th>End Year</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>St Augustine High</td>
                                <td>2007</td>
                                <td>2010</td>
                                <td>
                                    <button class="btn btn-danger btn-sm">
                                         <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
         
            <div class="row">
                <div class="col-md-12">
                    <div class="row bg-primary">
                        <div class="col-md-6">   
                            <h6  class="h-title text-light">Work Experience</h6>
                        </div>
                        <div class="col-md-6 text-right">
                                    <a href="#" data-toggle="modal" data-target="#workModal" id="add_expeience" class="btn btn-dark btn-sm add_education">
                                        <i class="fa fa-plus" aria-hidden="true"></i>   
                                    </a>
                        </div>
                    </div>      
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Company</th>
                                <th>Start Year</th>
                                <th>End Year</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ZeebasTech </td>
                                <td>2017</td>
                                <td>Current</td>
                                <td>
                                    <button class="btn btn-danger btn-sm">
                                         <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
</div>


@endsection


<!--School Modal -->
<div class="modal fade" id="educationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Eduction</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-inline">
                <div class="form-group">
                    <label for="staticEmail2" class="sr-only">Name</label>
                    <input type="text" class="form-control" id="staticEmail2" placeholder="Name">
                </div>
                <div class="form-group mx-sm-3">
                    <label for="start" class="sr-only">Start</label>
                    <input type="date" class="form-control" id="start" placeholder="start date">
                </div>
                <div class="form-group mx-sm-3">
                    <label for="end" class="sr-only">End</label>
                    <input type="date" class="form-control" id="end" placeholder="end date">
                </div>
                <!-- <button type="submit" class="btn btn-primary">Add Institution</button> -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add Institution</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="workModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Work</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-inline">
                <div class="form-group">
                    <label for="staticEmail2" class="sr-only">Name</label>
                    <input type="text" class="form-control" id="staticEmail2" placeholder="Name">
                </div>
                <div class="form-group mx-sm-3">
                    <label for="start" class="sr-only">Start</label>
                    <input type="date" class="form-control" id="start" placeholder="start date">
                </div>
                <div class="form-group mx-sm-3">
                    <label for="end" class="sr-only">End</label>
                    <input type="date" class="form-control" id="end" placeholder="end date">
                </div>
                <!-- <button type="submit" class="btn btn-primary">Add Institution</button> -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add Work</button>
      </div>
    </div>
  </div>
</div>