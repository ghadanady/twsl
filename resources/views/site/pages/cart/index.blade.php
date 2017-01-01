@extends('site.layouts.master')
@section('title')
    Shopping Cart
@endsection

@section('page-title')
    <li>
        <a href="{{url('/')}}">
            <i class="fa fa-home"></i>home
        </a>
    </li>
    <li class="active">Shopping Cart</li>
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="box-wrap brdr-rd-3">
                        <table class="table-cart">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail"></th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($basket->all() as $item)
                                    @php
                                        $item_details = $item->translated();
                                        $image = $item->getImages()[0];
                                    @endphp
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="{{ $item->getUrl() }}">
                                                <img src="{{ $image->url }}">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="{{ $item->getUrl() }}">{{ $item_details->name }}</a>
                                        </td>
                                        <td class="product-price">
                                            {{ $item->getDiscount() }}$
                                        </td>
                                        <td class="product-quantity">
                                            <div class="cat-number">
                                                <a href="#" class="number-down">
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <input value="{{ $item->quantity }}" max="{{ $item->stock }}"  class="form-control" type="text">
                                                <a href="#" class="number-up">
                                                    <i class="fa fa-angle-up"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            {{ $item->quantity * $item->getDiscount() }}$
                                        </td>
                                        <td class="product-remove">
                                            <button type="button"  class="cart-btn" data-quantity="0" data-url="{{ route('site.cart.update' , ['slug' => $item_details->slug]) }}">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!--End Cart-content-->
                </div><!--End Col-md-9-->
                <div class="col-md-3">
                    <div class="cart-total">
                        <h3>
                            cart total
                        </h3>
                        <ul>
                            <li>
                                subtotal :
                                <span>{{ $basket->subTotal() }}$</span>
                            </li>
                            <li>
                                total :
                                <span>{{ ($subTotal = $basket->subTotal()) > 0 ?  $subTotal + 5 : 0}}$</span>
                            </li>
                        </ul>
                        <a href="" class="custom-btn">
                            Proceed to Checkout
                        </a>
                    </div>
                </div><!--End Col-md-8-->
            </div><!--End Row-->

        </div><!--End container-fluid-->
    </div><!--End page-content-->
@endsection
