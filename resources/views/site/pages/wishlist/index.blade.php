@extends('site.layouts.master')  
@section('title')
Wishlist
@endsection 

@section('page-title')
    <li>
        <a href="index.html">
            <i class="fa fa-home"></i>home   
        </a>
    </li>  
    <li class="active">Wishlist</li>
@endsection 
@section('content')    
    <div class="page-content">
        <div class="container-fluid">                        
            <div class="row">
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
                <div class="col-sm-3">
                    <ul class="account-sidebar">
                        <li class="account-img">
                            <img src="images/avatar.png">
                        </li><!--End account-img-->
                        <li>
                            <a href="profile.html">
                                <i class="fa fa-user"></i>
                                Account Information
                            </a>
                        </li>
                        <li>
                            <a href="profile-items.html">
                                <i class="fa fa-pencil-square-o"></i>
                                My Items
                            </a>
                        </li>
                        <li class="active">
                            <a href="wishlist.html">
                                <i class="fa fa-heart"></i>
                                My Wishlist
                            </a>
                        </li>
                    </ul><!--End account-sidebar-->
                </div><!--End Col-sm-3-->
            </div><!--End Row-->
        </div><!--End container-fluid-->
    </div><!--End page-content-->
@endsection    