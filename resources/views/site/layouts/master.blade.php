<!DOCTYPE html>
<html>
    <head>
        <!-- Basic page needs
		===========================-->
		<title>@yield('title')</title>
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

        <!-- Css Base And Vendor
		===========================-->
        <link rel="stylesheet" href="{{asset('assets/site/vendor/bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/vendor/jquery-ui/jquery-ui.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/vendor/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/vendor/owl-carousel/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/vendor/owl-carousel/css/owl.theme.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

        <!-- Site Style
		===========================-->
        <link rel="stylesheet" href="{{asset('assets/site/css/style-elements.css')}}">
        <link rel="stylesheet" href="{{asset('assets/site/css/style.css')}}">

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
        <![endif]-->
    </head>
    <body>
        <div class="wrapper">
            <!-- header -->
            @include('site.layouts.header')
            <div class="main" role="main">
             <ul class="breadcrumb">
                @yield('page-title')
                </ul><!--End breadcrumb-->
                <!-- slider -->
                @include('site.layouts.slider')

                <!-- content -->
                @yield('content')

                <!-- footer -->
                @include('site.layouts.footer')

            </div><!--End main-->
        </div><!--End Wrapper-->

        <div id="productModal" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div><!--End modal-header-->
                    <div class="modal-body">

                    </div><!--End modal-body-->
                </div><!--End modal-content -->
            </div><!--End modal-dialog -->
        </div><!-- END productModal -->

        <!--Scripts Plugins-->
        <form id="csrf">{!! csrf_field() !!}</form>
        <script src="{{asset('assets/site/vendor/jquery/jquery.js')}}"></script>
        <script src="{{asset('assets/site/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/site/vendor/countdown.js')}}"></script>
        <script src="{{asset('assets/site/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{asset('assets/site/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/site/vendor/jcarousellite.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/jquery.loadingoverlay/latest/loadingoverlay.min.js"></script>
        <script src="{{ asset('assets/site/vendor/noty/js/noty/packaged/jquery.noty.packaged.min.js') }}"></script>
        <script src="{{asset('assets/site/js/main.js')}}"></script>
        <script src="{{asset('assets/admin/process.js')}}"></script>
    </body>
</html>
