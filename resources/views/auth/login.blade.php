<!doctype html>
<html lang="en" dir="ltr">
  
<!-- NRTlogin.html by NRT, Mon, 31 Dec 2018 06:28:47 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="msapplication-TileColor" content="#ff685c">
        <meta name="theme-color" content="#32cafe">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"/>
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}" />

        <!-- Title -->
        <title>NRT – Admin Bootstrap4 Responsive Webapp Dashboard Template</title>
        <link rel="stylesheet" href="{{asset('assets/fonts/fonts/font-awesome.min.css')}}">

        <!-- Font Family -->
        <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">

        <!-- Dashboard Css -->
        <link href="{{asset('assets/css/dashboard.css')}}" rel="stylesheet" />

        <!-- c3.js Charts Plugin -->
        <link href="{{asset('assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet" />

        <!-- Custom scroll bar css-->
        <link href="{{asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />

        <!---Font icons-->
        <link href="{{asset('assets/plugins/iconfonts/plugin.css')}}" rel="stylesheet" />

  </head>
    <body class="login-img">
        <div class="page">
            <div class="page-single">
                <div class="container">
                    <div class="row">
                        <div class="col mx-auto">
                            <div class="text-center mb-6">
                                <img src="{{asset('assets/images/brand/logo.png')}}" class="" alt="">
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card-group mb-0">
                                        <div class="card p-4">
                                            <div class="card-body">
                                                <h1>Login</h1>
                                                <p class="text-muted">Sign In to your account</p>

                                                <form method="POST" action="{{ route('login') }}">
                                                @csrf

                                                <div class="input-group mb-3">
                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                                    <!-- <input type="text" class="form-control" placeholder="Username"> -->
                                                    <input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif


                                                </div>


                                                <div class="input-group mb-4">
                                                    <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>

                                                    <!-- <input type="password" class="form-control" placeholder="Password"> -->

                                                    <input placeholder="Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                    @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif


                                                </div>


                                                <div class="row">
                                                    <div class="col-12">

                                                        <button type="submit" class="btn btn-gradient-primary btn-block">Login</button>


                                                    </div>
                                                    <div class="col-12">
                                                        @if (Route::has('password.request'))
                                                        <a href="{{ route('password.request') }}" class="btn btn-link box-shadow-0 px-0">Forgot password?</a>
                                                        @endif
                                                    </div>
                                                </div>




                                            </div>
                                        </div>
                                        <div class="card text-white bg-primary py-5 d-md-down-none login-transparent">
                                            <div class="card-body text-center justify-content-center ">
                                                <h2>Sign up</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.ed ut perspiciatis unde omnis iste natus error sit voluptatem  </p>
                                                <a href="{{ route('register') }}" class="btn btn-gradient-success active mt-3">Register Now!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Dashboard js -->
        <script src="{{asset('assets/js/vendors/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/vendors/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('assets/js/vendors/selectize.min.js')}}"></script>
        <script src="{{asset('assets/js/vendors/jquery.tablesorter.min.js')}}"></script>
        <script src="{{asset('assets/js/vendors/circle-progress.min.js')}}"></script>
        <script src="{{asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
        
        <!-- Custom scroll bar Js-->
        <script src="{{asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        
    </body>

<!-- NRTlogin.html by NRT, Mon, 31 Dec 2018 06:28:47 GMT -->
</html>
