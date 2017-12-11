<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
   
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <style>
    .nav-padding{
        padding: 0 10px;
    }
    .h-title{
        margin:10px 0 5px 0;
    }
    .list-group-item{
        font-size: 14px;
    }
    .gutter{
        margin-top:20px;
    }
    .card-mg{
        margin-bottom:25px;
    }
    .mb-header{
        font-weight: bolder;
    }
    .mb-box{
        padding-top:20px;
    }
    #form-skill-add{
        visibility:hidden;
        height:0;
    }

    .add_education{
        margin-top:5px;
    }
    
    .btn-skill-b{
        margin-bottom: 5px;
       
    }

   

    </style>
</head>

<body>
    <div id="app">
        @guest
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-padding">
            <a class="navbar-brand" href=" {{ url('/')}}"> {{ config('app.name', 'Laravel') }}
                
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
  </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                        <a class="nav-link {{ Request::path()=='login'? 'active':'' }}" href=" {{ url('login')}} ">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path()=='register'? 'active':'' }}" href=" {{ url('register')}}">Job Seeker</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path()=='companies/create'? 'active':'' }}" href=" {{ url('companies/create')}}">Employer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">App Guide</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Contact</a>
                    </li>
                </ul>
                  
            </div>
        </nav>
        @else
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-padding">
                <a class="navbar-brand" href=" {{ route('home') }}"> {{ config('app.name', 'Laravel') }}
                     <p class="text-center" style="font-size:10px;padding:0;margin:0">
                         @if ( Auth::user()->company )
                            {{ Auth::user()->company->name}}
                        @endif  
                        </p>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item {{ Request::path()==''? 'active':'home' }}">
                            <a class="nav-link {{ Request::path()=='home'? 'active':'home' }}" href=" {{ route('home')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        @foreach (Auth::user()->roles as $role) 
                            @if ($role->name=='superadmin')
                               
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                         Adminstration
                                     </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href=" {{ url('adminstration')}} ">Admin</a>
                                        <a class="dropdown-item" href=" {{ url('groups') }}">Main Groups</a>
                                        <a class="dropdown-item" href=" {{ url('subgroups')}} ">Sub Groups</a>
                                    </div>
                                </li>
                            @endif 
                            @if ($role->name=='admin')
                            <li class="nav-item">
                                <a class="nav-link {{ Request::path()=='admin'? 'active':'home' }}" href=" {{ url('admin')}} ">Admin</a>
                            </li>
                            @endif 
                        @endforeach
                         @if (Auth::user()->user_type->name=='Employer')
                        <li class="nav-item">
                            <a class="nav-link {{ Request::path()=='jobs'? 'active':'' }}" href=" {{ url('jobs') }} ">Browse Jobs </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::path()=='applicants'? 'active':'' }}" href=" {{ route('applicants') }} ">Applicants</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ Request::path()=='subscribers'? 'active':'' }}" href=" {{ route('subscribers') }}">Subscribers</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                 Users
                             </a>
                            <div class="dropdown-menu {{ Request::path()=='users'? 'active':'home' }}" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href=" {{ url('users')}} ">List of users</a>
                                <a class="dropdown-item" href=" {{ url('users') }}">Manage Users</a>
                                <a class="dropdown-item" href=" {{ url('users')}} ">New User</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" href=" {{ route('showCreateJobForm')}} ">Post a Job</a>
                        </li>
                        @endif @if (Auth::user()->user_type->name=='Employee')
                        <li class="nav-item">
                            <a class="nav-link {{ Request::path()=='skills'? 'active':'home' }}" href=" {{ url('skills') }} ">Skills</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link {{ Request::path()=='subscriptions'? 'active':'home' }}" href=" {{ url('subscriptions') }} ">Subscriptions</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link {{ Request::path()=='documents'? 'active':'home' }}" href=" {{ url('documents') }} ">Add Resume</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link {{ Request::path()=='applications'? 'active':'home' }}" href=" {{ url('applications') }} ">Job Applications</a>
                        </li>
                        @endif
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input style="padding:0px;font-size:15px" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </form>
                    <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('profile_user') }}">Profile <i class="fa fa-user" aria-hidden="true"></i></a>
                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    </a> 
                                </div>
                            </li>
                    </ul>
                </div>
    
            </nav>
        @endguest 
        <div class="container gutter">
              <div class="row">
                    @auth
                        <div class="col-md-3">
                            @include('components.sidebar');
                        </div>
                        <div class="col-md-9">
                            @yield('content')
                        </div>
                  @endauth
                  @guest
                        <div class="col-md-12">
                            @yield('content')
                        </div>
                  @endguest
                    
              </div>
        </div>
        
       
    </div>

    <!-- Scripts -->
    <meta name="_token" content=" {!! csrf_token() !!}" />
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
   
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
            }
        });
            var js_multiple = $(".js-example-basic-multiple");
            var a = js_multiple.select2();
             $.ajax({
                 method:'GET',
                 url:'/group/list',
                 success: function (data){
                     console.log('roles', data);
                     $(data).each(function(index,value){
                            console.log('value',value);
                            js_multiple.append("<option value='"+value.id+"'>"+value.name+"</option>")
                     });
                 }
             })

             var address_f = $(".address");
            var btn_address_f = address_f.select2();
             $.ajax({
                 method:'GET',
                 url:'/addresses',
                 success: function (data){
                     console.log('address ', data);
                     $(data).each(function(index,value){
                            console.log('value',value);
                            address_f.append("<option value='"+value.id+"'>"+value.name+"</option>")
                     });
                 }
             })  


            $("#show-form-skill-add").on('click',function(e){
                e.preventDefault();
                console.log('goooal');
                $("#form-skill-add").css({
                    height: '100px',
                    visibility:'visible'
                });
               

            })

            var skills = $(".skills_list");
            var skills_elem = skills.select2();

            $(".btn-skills").on('click',function(e){
                e.preventDefault();
                var id = $(this).data('item');
                alert('delete skill '+ id );
            })

              $.ajax({
                 method:'GET',
                 url:'/skills/list',
                 success: function (data){
                     console.log('skills', data);
                     $(data).each(function(index,value){
                            console.log('skills',value);
                            skills.append("<option value='"+value.id+"'>"+value.name+"</option>")
                     });
                 }
             });
             $("#add_my_skills").on('click',function(e){
                 e.preventDefault();
                 var skills = $("#skills").val();
                //  var data = {
                //      'data'
                //  }
              $.ajax({
                  url:'/skills/add',
                  method:'POST',
                  data: {
                        'skills':skills
                  },
                  success: function(data){
                    console.log('success',data);
                  },
                  error: function(data){
                      console.log('error',data);
                  }
              })
                 console.log('skills',skills);
                // alert('update my skills');
             })   
            //  $("#add_education").on('click',function(e){
            //     e.preventDefault();
            //     alert('update my education');
            //  })
            //  $("#add_expeience").on('click',function(e){
            //     e.preventDefault();
            //      alert('update my expeience');
            //  })
             
        });
    </script>
</body>

</html>