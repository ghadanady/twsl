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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <title>توصل | @yield('title')</title>
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
    <script type="text/javascript" src="{{ asset('assets/site/assest/js.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/site/crs/crs.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/jquery.loadingoverlay/latest/loadingoverlay.min.js"></script>
    <script src="{{ asset('assets/site/noty/js/noty/packaged/jquery.noty.packaged.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/admin/process.js') }}"></script>
    @yield('scripts')
</body>

</html>
