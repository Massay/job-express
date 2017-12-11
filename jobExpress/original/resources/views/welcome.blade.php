<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('font-awesome/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                /* background-color: #fff; */
                background: url("{{ asset('storage/water-747618_1920.jpg') }}");
                background-repeat:no-repeat;
                color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #ffff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a  href="{{ route('login') }}"  >Login</a>
                        <!-- <a href="{{ route('register') }}">Register</a> -->
                    @endauth
                </div>
            @endif

            <div class="content">
                 <h4>Welcome to</h4>
                 <h1><i class="fa fa-arrow-down" aria-hidden="true"></i></h1>
                <div class="title m-b-md">
                {{ config('app.name')}}
                <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                   
                <a href=" {{ route('showCreateCompanyForm') }}" class="btn btn-light text-primary"  data-toggle="tooltip" data-placement="left" title="Sign up as an employer and find the best qualified employees. Create Jobs and manage your institution info">I'm an Employer</a> 
                <a href=" {{ route('register') }}" class="btn btn-light text-primary"  data-toggle="tooltip" data-placement="right" title="Looking for a job? Sign up and stand a change of finding your dream jobs">I'm a Job Seeker</a>
            </div>
        </div>
            <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script>
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    </body>
</html>
