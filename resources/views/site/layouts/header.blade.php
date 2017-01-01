<header class="header">
    <a class="col-xs-5 col-sm-3 col-md-2 logo" href="index.html">
        <img src="{{asset('assets/site/images/logo3.png')}}">
    </a><!--End logo-->
    <div class="col-xs-5 col-sm-7 col-md-9 main-header">
        <div class="header-top">
            <div class="navbar top-navbar" role="navigation">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".top-navbar .navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <nav class="collapse collapsing navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index-ar.html">Arabic</a></li>
                        @if(!auth()->guard('members')->check())
                        <li>
                            <a class="popup-text" href="{{route('login')}}" data-effect="mfp-move-from-top" >Log In</a>
                        </li>
                        <li>
                            <a class="popup-text" href="{{route('login')}}" data-effect="mfp-move-from-top"> Register</a>
                        </li>
                        @else
                        <li>
                            <span style="color: white;">welcome:{{Auth()->guard('members')->user()->f_name}} </span>
                        </li>
                        <li>
                            <a class="popup-text" href="{{route('logout')}}" data-effect="mfp-move-from-top"> Log out</a>
                        </li>
                        <li><a href="{{ url('/profile') }}">My Account</a></li>
                        @endif
                        <li><a href="">Checkout</a></li>
                    </ul><!--End navbar-nav-->
                </nav><!--End navbar-collapse-->
            </div><!--End top-navbar-->
            <form class="form-icon head-search">
                <input type="text" placeholder="Enter Key Search">
                <button type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </form><!--End head-search-->
            <a class="head-wish" href="{{route('site.wishlist.index')}}">
                <i class="fa fa-heart"></i>
                @php
                    $wishlistCount = 0;
                    $auth = auth()->guard('members');
                    if($auth->check()){
                        $wishlistCount = $auth->user()->wishlistProducts->count();
                    }
                @endphp
                <span id="wishlist-count">{{ $wishlistCount }}</span>
            </a>
        </div><!--End header-top-->
        <div class="menu-toggle">
            <span>menu toggle</span>
        </div>
        <div class="site-menu">
            <div class="menu-toggle">
                menu toggle
            </div>
            <ul class="menu-nav">
            <!-- shape 1 menu -->
                @include('site.layouts.menus.shape1')
            <!-- shape 2 menu -->
                @include('site.layouts.menus.shape2')
            </ul><!--End menu-nav -->
        </div><!--End site-menu-->
    </div><!--End main-header-->
    <div id="shopping-cart-box" data-url="{{ route('site.cart.index') }}" class="col-xs-2 col-sm-2 col-md-1 shop-cart">
        @include('site.layouts.shopping-cart')
    </div><!--End shop-cart-->
</header><!--End header-->
