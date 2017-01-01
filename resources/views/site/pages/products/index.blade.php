@extends('site.layouts.master')
@section('title')
    Products
@endsection
@section('page-title')
    <li>
        <a href="{{url('/')}}">
            <i class="fa fa-home"></i>home
        </a>
    </li>
    <li class="active">Products</li>
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="side-widget">
                        <div class="side-widget-title">
                            <h3>hot deals</h3>
                        </div><!--End side-widget-title-->
                        <div class="side-widget-cont widgets_carousel">
                            @foreach($hot_deals as $hot)
                                @php
                                $hot_details = $hot->translated();
                                $image = $hot->getImages()[0];
                                @endphp
                                <div class="product-item">
                                    <div class="img-container">
                                        <a href="{{ $hot->getUrl() }}" class="product-img">
                                            <img src="{{$image->url}}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <a href="#" class="cart-btn" data-quantity="1" data-url="{{ $hot->getCartUrl('add') }}">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                            <a href="#" data-url="{{ $hot->getWishlistUrl() }}" 
                                            class=" wishlist-btn">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a href="">
                                                <i class="fa fa-refresh"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#productModal">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                        </div><!--End product-action-->
                                    </div><!--End img-container-->

                                    <div class="product-desc">
                                        <a href="{{ $hot->getUrl() }}" class="product-name">
                                            {{$hot_details->name}}
                                        </a><!--End product-name-->
                                        <ul class="rating">
                                        @php
                                            $total = $hot->total_reviews();
                                        @endphp
                                        @for($i=1 ; $i<=5 ;$i++)
                                            @if($i <= $total)
                                                <li class="active"></li>
                                            @else
                                                <li></li>
                                            @endif
                                        @endfor 
                                        </ul><!--End rating-->
                                        <div class="price-box">
                                            <span class="price">${{$hot->getDiscount()}} </span>
                                            <s class="old-price">${{$hot->getPrice()}}</s>
                                        </div><!--End price-box-->
                                    </div><!--End product-desc-->
                                    <div class="timer-count">
                                        <div data-countdown="{{$hot->getDiscountDate()}}"></div>
                                    </div><!--End timer-count-->
                                </div><!--End product-item-->
                            @endforeach
                        </div><!--End side-widget-cont-->
                    </div><!--End side-widget-->
                    <div class="side-widget">
                        <div class="side-widget-cont">
                            <div class="side-banner">
                            @foreach($advs as $ads)
                                @if($ads->getPosition('left_ads'))
                                    <img src="{{('storage/uploads/images/banners/'.$ads->image_name)}}" class="img-180">
                                @endif
                            @endforeach
                            </div><!--End side-banner-->
                        </div><!--End side-widget-cont-->
                    </div><!--End side-widget-->
                    <div class="side-widget">
                        <div class="side-widget-title">
                            <h3>best seller</h3>
                        </div><!--End side-widget-title-->
                        <div class="side-widget-cont widgets_carousel">
                            @foreach($best_seller as $index=>$best)
                                @php
                                $best_details = $best->translated();
                                $image = $best->getImages()[0];
                                @endphp
                                @if($index == 0 || $index%4 == 0)
                                    <div class="item">
                                    @endif
                                    <div class="product-item side-product">
                                        <div class="img-container">
                                            <a href="{{ $best->getUrl() }}" class="product-img">
                                                <img src="{{$image->url}}" alt="">
                                            </a>
                                        </div><!--End img-container-->
                                        <div class="product-desc">
                                            <a href="{{ $best->getUrl() }}" class="product-name">
                                                {{$best_details->name}}
                                            </a><!--End product-name-->
                                            <div class="price-box">
                                                <span class="price">${{$best->getDiscount()}}</span>
                                                @if($best->hasOffer())
                                                    <s class="old-price">${{$best->getPrice()}}</s>
                                                @endif
                                            </div><!--End price-box-->
                                            <ul class="rating">
                                             @php
                                                $total = $best->total_reviews();
                                            @endphp
                                            @for($i=1 ; $i<=5 ;$i++)
                                                @if($i <= $total)
                                                    <li class="active"></li>
                                                @else
                                                    <li></li>
                                                @endif
                                            @endfor 
                                            </ul><!--End rating-->
                                        </div><!--End product-desc-->
                                    </div><!--End product-item-->
                                    @if($index%4 == 3 || $index == sizeof($best_seller)-1)
                                    </div><!--End item-->
                                @endif
                            @endforeach
                        </div><!--End side-widget-cont-->
                    </div><!--End side-widget-->
                </div><!--End col-md-3-->

                <div class="col-md-9">
                    <form action="{{ $base_url }}">
                        <div class="section-offset">
                            <div class="top-box">
                                <div class="row">
                                    <div class="col-md-3">
                                        <select class="pull-left" id="menu-select" name="order">
                                            <option value="default">Default</option>
                                            <option value="price">Price</option>
                                            <option value="name">Name</option>
                                            <option value="date">Date</option>
                                        </select><!--End sort-wrapper-->
                                    </div><!--End Col-md-3-->
                                    <div class="col-md-3">
                                        <select class="pull-left" id="menu-select2" name="per_page">
                                            <option value="9">9</option>
                                            <option value="12">12</option>
                                            <option value="6">6</option>
                                            <option value="3">3</option>
                                        </select><!--End sort-wrapper-->
                                    </div><!--End Col-md-3-->
                                    <div class="col-md-4">
                                        <div class="widget-range">
                                            <div class="clearfix">
                                                <input class="first_limit" readonly type="text"
                                                value="${{ $min_price }}" data-value="{{ $min_price }}" name="first_limit">
                                                <input class="last_limit" readonly type="text"
                                                value="${{ $max_price }}" data-value="{{ $max_price }}" name="last_limit">
                                            </div>
                                            <div id="price"></div>
                                        </div><!--End side-widget-->
                                    </div><!--End Col-md-4-->
                                    <div class="col-md-2">
                                        <div class="toggle-products pull-right" data-container="#products-wrap">
                                            <a href="" data-layout="list_view">
                                                <i class="fa fa-th-list"></i>
                                            </a>
                                            <a href="" class="active" data-layout="grid_view">
                                                <i class="fa fa-th-large"></i>
                                            </a>
                                        </div><!--End toggle-products-->
                                    </div><!--End Col-md-4-->
                                </div><!--End Row-->
                            </div><!--End top-box-->
                            <div id="products-area">
                                @include('site.pages.products.templates.products',compact('products'))
                            </div>
                        </div><!--End section-offset-->
                    </form>
                </div><!--End col-md-9-->
            </div><!--End row-->
        </div><!--End container-->

    </div><!--End page-content-->
@endsection
