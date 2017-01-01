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
    <li>
        <a href="{{url('/products')}}">
            <i class="fa fa-home"></i>Products
        </a>
    </li>
    <li class="active">Product details</li>
@endsection
@section('content')

    <div class="page-content categories-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                   <div class="gallery-slider">
                        @foreach($product->images as $index=>$img) 
                            @if($index == 0)  
                            <div class="general-img">
                                <img id="show-product" src="{{url('storage/uploads/images/products/'.$img->name)  }}" data-zoom-image="{{url('storage/uploads/images/products/'.$img->name)}}"> 
                            </div><!--general-img-->
                            @endif
                        @endforeach    
                        <div class="wrap-gallery-thumb">
                            <div class="gallery-thumb">
                                <ul>
                                    <li class="active">
                                        @foreach($product->images as $img)
                                        <a href="#" 
                                            data-image="{{url('storage/uploads/images/products/'.$img->name)  }}" 
                                            data-zoom-image="{{url('storage/uploads/images/products/'.$img->name)}}">
                                            <img alt="" src="{{url('storage/uploads/images/products/'.$img->name)}}">
                                        </a>
                                        @endforeach
                                    </li>
                                </ul>
                            </div><!--End gallery-thumb-->
                            <div class="gallery-control">
                                <a href="#" class="prev">
                                    <i class="fa fa-long-arrow-down"></i>
                                </a>
                                <a href="#" class="next">
                                    <i class="fa fa-long-arrow-up"></i>
                                </a>
                            </div><!--End gallery-control-->
                        </div><!--End wrap-gallery-thumb-->
                    </div><!--End gallery-slider-->
                </div><!--End col-md-5-->
                <div class="col-md-6 col-md-offset-1">
                    <div class="product-detail">
                        <div class="product-title">
                            {{$product->translated()->name}}
                        </div>
                         <div class="reviews-box">  
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
                            </ul>
                            <a href="#reviews" class="add-review" style="color: red;">
                                   Add your review
                            </a>
                        </div>
                        <p>
                            {!! $product->getDescription(10) !!}

                        </p>
                    </div><!--End product-detail-->
                    <table class="product-item-info">
                        <thead>
                            <tr>
                                <th>Special Price</th>
                                <th>Old Price</th>
                                <th>Availability</th>
                                <th>in stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                   ${{$product->getDiscount()}}
                                </td>
                                <td>
                                    ${{$product->getPrice()}}
                                </td>
                                <td class="in-stok">
                                    in stock
                                </td>
                                <td>
                                    {{$product->stock}} item
                                </td>
                            </tr>
                        </tbody>
                    </table><!--End product-item-info-->
                    <div class="product-item-cart">
                        <form onsubmit="return false;" class="cart-form" action="{{ $product->getCartUrl('update') }}">
                            <span>product quantity</span>
                            <div class="cat-number">
                                <a href="#" class="number-down">
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <input value="1" max="{{ $product->stock }}" class="form-control" name="quantity" type="text">
                                <a href="#" class="number-up">
                                    <i class="fa fa-angle-up"></i>
                                </a>
                            </div>
                            <button type="button" class="text-icon-btn cart-btn">
                                <i class="fa fa-shopping-cart"></i>
                                add to cart
                            </button>
                            <button type="button" class="icon-btn wishlist-btn" data-url="{{ $product->getWishlistUrl() }}">
                                <i class="fa fa-heart"></i>
                            </button>
                            {{ csrf_field() }}
                        </form>
                    </div><!--End product-item-cart-->
                </div><!--End col-md-6-->
            </div><!--End row-->
            <div class="spacer-60"></div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="tab-wrapper">
                        <ul class="tab">
                            <li>
                                <a href="#description">Description</a>
                            </li>
                            <li>
                                <a href="#reviews">Reviews</a>
                            </li>
                        </ul><!--End tab-->
                        <div class="tab-content"> 
                            <div id="description" class="tab-panel description"> 
                                <p> 
                                   {!! $product->translated()->description !!}
                                </p>
                            </div><!--End description tab-panel-->  
                            <div id="reviews" class="tab-panel"> 
                                <div class="row">
                                    <div class="col-md-8">
                                      @include('site.pages.products.templates.review-template')
                                        <div class="clear-fix"></div>
                                    </div><!--End col-md-8-->
                                @if(auth()->guard('members')->check())
                                    <div class="col-md-4">
                                        <form  class="ajax-form review-form" action="{{route('site.products.review')}}" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="product_id" 
                                            value="{{$product->id}}">
                                            <table class="table-rate">
                                                <thead>
                                                    <tr>    
                                                        <th>Star</th>
                                                        <th>Star</th>
                                                        <th>Star</th>
                                                        <th>Star</th>
                                                        <th>Star</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>    
                                                            <input  name="rate[]" id="rate1" type="checkbox" value="rate1">
                                                            <label for="rate1"></label>
                                                        </td>
                                                        <td>    
                                                            <input name="rate[]" id="rate2" type="checkbox" value="rate2">
                                                            <label for="rate2"></label>
                                                        </td>
                                                        <td>    
                                                            <input name="rate[]" id="rate3" type="checkbox" value="rate3">
                                                            <label for="rate3"></label>
                                                        </td>
                                                        <td>    
                                                            <input name="rate[]" id="rate4" type="checkbox" value="rate4">
                                                            <label for="rate4"></label>
                                                        </td>
                                                        <td>    
                                                            <input name="rate[]" id="rate5" type="checkbox" value="rate5">
                                                            <label for="rate5"></label>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input name="f_name" 
                                                    value="{{Auth()->guard('members')->user()->f_name}}" type="text" disabled="disabled">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input  type="email" name="email" 
                                                    value="{{Auth()->guard('members')->user()->email}}" type="text" disabled="disabled">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <textarea rows="4" placeholder="your review" name="review"></textarea>
                                                </div>
                                            </div><!--Row-->
                                            <div class="row">
                                                <div class="col-sm-12">     
                                                     <button type="submit"  class="ajax-submit custom-btn">Submit Review</button>
                                                </div>
                                            </div><!--Row-->
                                        </form>
                                    </div><!--End col-md-4-->
                                @else 
                                    <p>you are not allowed to make any review .. please login first </p>
                                @endif
                                </div><!--End row-->   
                            </div><!--End tab-panel-->
                        </div><!--End tab-content-->   
                    </div><!--End tab-wrapper-->
                </div><!--End Col-Sm-12-->
            </div><!--End Row-->
        </div><!--End container-->
    </div><!--End page-content-->
@endsection
@section('templates')
    <script type="text/html" id="review-template">
        @include('site.pages.products.templates.review-template')
    </script>
@endsection
