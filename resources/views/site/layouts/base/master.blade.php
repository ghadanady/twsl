<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <link href="{{ asset('assets/site/assest/bokra.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/site/assest/css/font-awesome.min.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/site/assest/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/site/owl-carousel/owl.carousel.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/site/owl-carousel/owl.theme.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/site/owl-carousel/owl.transitions.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/assest/jquery-ui.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/assest/style.css') }}" />
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.css">
      <link rel="stylesheet" href="{{ asset('assets/site/sweetalert.css') }}">
    <title>توصل | @yield('title')</title>
    <style type="text/css">
                .behclick-panel  .list-group {
            margin-bottom: 0px;
        }
        .behclick-panel .list-group-item:first-child {
            border-top-left-radius:0px;
            border-top-right-radius:0px;
        }
        .behclick-panel .list-group-item {
            border-right:0px;
            border-left:0px;
        }
        .behclick-panel .list-group-item:last-child{
            border-bottom-right-radius:0px;
            border-bottom-left-radius:0px;
        }
        .behclick-panel .list-group-item {
            padding: 5px;
        }
        .behclick-panel .panel-heading {
            /*              padding: 10px 15px;
                            border-bottom: 1px solid transparent; */
            border-top-right-radius: 0px;
            border-top-left-radius: 0px;
            border-bottom: 1px solid darkslategrey;
        }
        .behclick-panel .panel-heading:last-child{
            /* border-bottom: 0px; */
        }
        .behclick-panel {
            border-radius: 0px;
            border-right: 0px;
            border-left: 0px;
            border-bottom: 0px;
            box-shadow: 0 0px 0px rgba(0, 0, 0, 0);
        }
        .behclick-panel .radio, .checkbox {
            margin: 0px;
            padding-left: 10px;
            
        }
        .checkbox input[type="checkbox"]{
            margin-right: -20px;

        }
        .behclick-panel .panel-title > a, .panel-title > small, .panel-title > .small, .panel-title > small > a, .panel-title > .small > a {
            outline: none;
        }
        .behclick-panel .panel-body > .panel-heading{
            padding:10px 10px;
        }
        .behclick-panel .panel-body {
            padding: 0px;
        }
         /* unvisited link */
        .behclick-panel a:link {
            text-decoration:none;
        }

        /* visited link */
        .behclick-panel a:visited {
            text-decoration:none;
        }

        /* mouse over link */
        .behclick-panel a:hover {
            text-decoration:none;
        }

        /* selected link */
        .behclick-panel a:active {
            text-decoration:none;
        }
       

    </style>
</head>

<body>

    <!-- header section -->
    @include('site.layouts.partials.header')

    <!-- navbar section -->
    @include('site.layouts.partials.navbar')

    <!-- content section -->
    @yield('content')

    <!-- footer section -->
    @include('site.layouts.partials.footer')


    <form id="csrf">
        {{ csrf_field() }}
    </form>
    <script type="text/javascript" src="{{ asset('assets/site/assest/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/site/assest/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/site/assest/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/site/owl-carousel/owl.carousel.js') }}" type="text/javascript"></script>
    
    <script type="text/javascript" src="{{ asset('assets/site/crs/crs.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/jquery.loadingoverlay/latest/loadingoverlay.min.js"></script>
    <script src="{{ asset('assets/site/noty/js/noty/packaged/jquery.noty.packaged.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/admin/process.js') }}"></script>
    <script src="{{ asset('assets/site/sweetalert.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/site/assest/js.js') }}"></script>
    
    @yield('scripts')

</body>

</html>
