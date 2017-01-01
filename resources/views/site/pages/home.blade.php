@extends('site.layouts.master')  
@section('title')
    home page
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="main-widget">
                <div class="main-widget-title">
                    <h3>Hot Deals</h3>
                </div><!--End main-widget-title-->
                <div class="main-widget-cont">
                    <div  class="widgets_carousel5">
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
                                        <a href="">
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
                            </ul>
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
                    </div><!--End widgets_carousel5-->
                </div><!--End main-widget-cont-->
            </div><!--End main-widget-->

            <div class="spacer-35"></div>

            <div class="box-wrap padding-15">
                <div class="row">
                    @foreach($advs as $ads)
                        @if($ads->getPosition('top'))
                            <div class="col-md-3">
                                <a class="main-banner" href="#">
                                    <img src="{{('storage/uploads/images/banners/'.$ads->image_name)}}" class="img-180">
                                </a><!--End main-banner-->
                            </div><!--End col-md-3-->
                        @endif
                    @endforeach
                </div><!--End Row-->
            </div><!--End box-wrap-->

            <div class="spacer-35"></div>
            <div class="main-widget">
                <div class="main-widget-title">
                    <h3>Our Products</h3>
                </div><!--End main-widget-title-->
                <div class="main-widget-cont">
                    <div class="tab-wrapper side-tab">
                        <ul class="tab">
                            @foreach($categories as $cat)
                                @php
                                $cat_details = $cat->translated();
                                @endphp
                                <li>
                                    <a href="#tab{{$loop->index}}">{{$cat_details->name}}</a>
                                </li>
                            @endforeach
                            <a href="{{route('site.products.index')}}" class="view-all">
                                View All Products
                            </a>
                        </ul><!--End tab-->
                        <div class="tab-content">
                            @foreach($categories as $cat)
                                @php
                                $cat_details = $cat->translated();
                                @endphp
                                <div id="tab{{$loop->index}}" class="tab-panel">
                                    <div  class="widgets_carousel4">
                                        @foreach($cat->getProducts() as $product)
                                            @php
                                            $product_details = $product->translated();
                                            $image = $product->getImages()[0];
                                            @endphp
                                            <div class="product-item">
                                                <div class="img-container">
                                                    <a href="{{ $product->getUrl() }}" 
                                                    class="product-img">
                                                        <img src="{{$image->url}}" alt="">
                                                    </a>
                                                    <div class="product-action">
                                                        <a href="#" class="cart-btn" data-quantity="1" data-url="{{ $product->getCartUrl('add') }}">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                        <a href="">
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
                                                    <a href="{{url('products/details/'.$product->id)}}" class="product-name">
                                                        {{$product_details->name}}
                                                    </a><!--End product-name-->
                                                    <ul class="rating">
                                                        @php
                                                            $total = $product->total_reviews();
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
                                                        <span class="price">${{$product->getDiscount()}} </span>
                                                        @if($product->hasOffer())
                                                            <s class="old-price">${{$product->getPrice()}}</s>
                                                        @endif
                                                    </div><!--End price-box-->
                                                </div><!--End product-desc-->
                                            </div><!--End product-item-->

                                        @endforeach
                                    </div><!--End widgets_carousel4-->

                                    <a class="custom-btn no-brdr-rd"
                                    href="{{$cat->getUrl()}}">
                                    Show More
                                </a>
                            </div><!--End description tab-panel-->
                        @endforeach
                    </div><!--End tab-content-->
                </div><!--End side-tab tab-wrapper-->
            </div><!--End main-widget-cont-->
        </div><!--End main-widget-->
        <div class="spacer-35"></div>
        <div class="box-wrap padding-15">
            <div class="row">
                @foreach($advs as $ad)
                @if($ad->position == 'left_corner')
                    <div class="col-md-8">
                        <div class="main-banner">
                            <img src="{{url('storage/uploads/images/banners/'.$ad->image_name)}}" class="img-150">
                        </div><!--End main-banner-->
                    </div><!--End col-md-8-->
                @endif
                @if($ad->position == 'right_corner')
                    <div class="col-md-4">
                        <div class="main-banner">
                            <img src="{{url('storage/uploads/images/banners/'.$ad->image_name)}}" class="img-150">
                        </div><!--End main-banner-->
                    </div><!--End col-md-4-->
                @endif
                @endforeach
            </div><!--End Row-->
        </div>
        <div class="spacer-35"></div>
        <div class="row">
            <div class="col-md-9">
                <div class="main-widget">
                    <div class="main-widget-title">
                        <h3>
                            New Arrivals
                        </h3>
                    </div><!--End main-widget-title-->
                    <div class="main-widget-cont">
                        <div  class="widgets_carousel4">
                            @foreach($new_arrival as $new)
                                @php
                                $new_details = $new->translated();
                                $image = $new->getImages()[0];
                                @endphp
                                <div class="product-item">
                                    <div class="img-container">
                                        <a href="{{ $new->getUrl() }}" class="product-img">
                                            <img src="{{$image->url}}" alt="">
                                        </a>
                                        <div class="product-action">
                                            <a href="#" class="cart-btn" data-quantity="1" data-url="{{ $new->getCartUrl('add') }}">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                            <a href="">
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
                                        <a href="{{$new->getUrl()}}" class="product-name">
                                            {{$new_details->name}}
                                        </a><!--End product-name-->
                                        <div class="">
                                            <p>
                                                <span style="color:red;"></span> {{$new->created_at}}
                                            </p><!-- sold number-->
                                        </div>
                                        <ul class="rating">
                                        @php
                                           $total = $new->total_reviews();
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
                                            <span class="price">$ {{$new->getDiscount()}}</span>
                                            @if($new->hasOffer())
                                                <s class="old-price">$ {{$new->getPrice()}}</s>
                                            @endif
                                        </div><!--End price-box-->
                                    </div><!--End product-desc-->
                                </div><!--End product-item-->
                            @endforeach
                        </div><!--End widgets_carousel4-->
                    </div><!--End main-widget-cont-->
                </div><!--End main-widget-->
                <div class="spacer-35"></div>
                <div class="box-wrap padding-15">
                    <div class="row">
                        @foreach($advs as $ad)
                            @if($ad->position == 'down')
                            <div class="col-md-6">
                                <a class="main-banner" href="#">
                                    <img src="{{('storage/uploads/images/banners/'.$ad->image_name)}}" class="img-180">
                                </a><!--End main-banner-->
                            </div><!--End col-md-3-->
                            @endif
                        @endforeach
                    </div><!--End Row-->
                </div><!--End box-wrap-->

            </div><!--End col-md-9-->
            <div class="col-md-3">
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
                                        <a href="{{$best->getUrl()}}" class="product-img">
                                            <img src="{{$image->url}}" alt="">
                                        </a>
                                    </div><!--End img-container-->
                                    <div class="product-desc">
                                        <a href="" class="product-name">
                                            {{$best_details->name}}
                                        </a><!--End product-name-->
                                        <div class="">
                                            <p>
                                                <span style="color:red;">sold:</span> {{$best->sold}} item
                                            </p><!-- sold number-->
                                        </div>
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
        </div><!--End row-->
    </div><!--End container-fluid-->
</div><!--End page-content-->
@endsection
