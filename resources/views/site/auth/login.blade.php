<!DOCTYPE html>
<html>
    <head>
        <!-- Basic page needs
        ===========================-->
        <title>login-register</title>
        <meta charset="utf-8">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">

        <!-- Mobile specific metas
        ===========================-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Favicon
        ===========================-->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/site/images/fave.png')}}">

        <!-- Google Web Fonts
        ===========================-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">


        <link rel="stylesheet" href="{{asset('assets/site/vendor/bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/vendor/jquery-ui/jquery-ui.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/vendor/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/vendor/owl-carousel/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/vendor/owl-carousel/css/owl.theme.css')}}">

        <!-- Site Style
        ===========================-->
        <link rel="stylesheet" href="{{asset('assets/site/css/style-elements.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/css/style.css')}}">

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="wrapper">
         @include('site.layouts.header')

            <div class="main" role="main">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.html">
                            <i class="fa fa-home"></i>home
                        </a>
                    </li>
                    <li class="active">Login &amp; Register</li>
                </ul><!--End breadcrumb-->

                <div class="page-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="box-wrap brdr-rd-3">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="login-register">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#login" data-toggle="tab">
                                                            login
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#register" data-toggle="tab">
                                                            register
                                                        </a>
                                                    </li>
                                                </ul><!--End nav-tabs-->
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="login">
                                                         <form class="dialog-form" action="{{ action('Site\Auth\AuthController@postLogin') }}"  method="post">
                                                             {{ csrf_field() }}
                                                            <div class="form-group">
                                                                <input type="text" placeholder="user name or email" class="form-control"  name="email">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" placeholder="password" class="form-control" name="password">
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="remmeber">
                                                                    <input id="remmeber" type="checkbox" name="remember">
                                                                    <label for="remmeber">
                                                                        remmeber me
                                                                    </label>
                                                                </div>
                                                                <div class="forget-pass">
                                                                    <a href="{{route('forget-password')}}">
                                                                        foreget your password ?
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="custom-btn">login</button>
                                                            <div class="text-spacer">
                                                                <p>or login with</p>
                                                            </div>
                                                            <ul class="scoial-login">
                                                                <li>
                                                                    <a href="{{ route('site.login.social' , ['provider' => 'facebook']) }}">
                                                                        <i class="fa fa-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>

                                                                    <a href="{{ route('site.login.social' , ['provider' => 'twitter']) }}">
                                                                        <i class="fa fa-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('site.login.social' , ['provider' => 'google']) }}">
                                                                        <i class="fa fa-google-plus"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </form>
                                                    </div><!--End tab-pane-->
                                                    <div class="tab-pane fade in" id="register">
                                                        <form class="dialog-form" action="{{action('Site\Auth\AuthController@postRegister')}}" method="post">
                                                             {{ csrf_field() }}
                                                            <div class="form-group">
                                                                <input type="text" placeholder="frist name" class="form-control"
                                                                name="f_name">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="last name" class="form-control"
                                                                name="l_name">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="phone number" class="form-control" name="phone">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="address" class="form-control"
                                                                name="address">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" placeholder="email address" class="form-control" name="email">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" placeholder="password" class="form-control"
                                                                name="password">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" placeholder="confirm password" class="form-control" name="repassword">
                                                            </div>
                                                            <button type="button" class="custom-btn"
                                                            id="btn-add-user">register</button>
                                                            <div class="text-spacer">
                                                                <p>or Register with</p>
                                                            </div>
                                                            <ul class="scoial-login">
                                                                <li>
                                                                    <a href="{{ route('site.login.social' , ['provider' => 'facebook']) }}">
                                                                        <i class="fa fa-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>

                                                                    <a href="{{ route('site.login.social' , ['provider' => 'twitter']) }}">
                                                                        <i class="fa fa-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('site.login.social' , ['provider' => 'google']) }}">
                                                                        <i class="fa fa-google-plus"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </form>
                                                    </div>
                                                </div><!--End tab-content-->
                                            </div><!--End login-register-->
                                        </div><!--End col-md-10-->
                                    </div><!--End row-->
                                </div><!--End box-wrap-->
                            </div><!--End col-md-8-->
                        </div><!--End Row-->
                    </div><!--End container-fluid-->
                </div><!--End page-content-->
            </div>
    @include('site.layouts.footer')

    <!--Scripts Plugins-->
    <script src="{{asset('assets/site/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('assets/site/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/site/vendor/countdown.js')}}"></script>
    <script src="{{asset('assets/site/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/site/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/site/vendor/jcarousellite.js')}}"></script>

    <script src="{{asset('assets/site/js/main.js')}}"></script>
    <script src="{{asset('assets/admin/process.js')}}"></script>
    </body>
</html>
