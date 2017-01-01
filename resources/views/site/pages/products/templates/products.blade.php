<div id="products-wrap" class="table-layout">
    <div class="table-row">
        @foreach ($products as $product)
            @php
            $product_details = $product->translated();
            $image = $product->getImages()[0];
            @endphp
            <div class="table-cell">
                <div class="product-item">
                    <div class="img-container">
                        <a href="{{ $product->getUrl() }}" class="product-img">
                            <img src="{{ $image->url }}" alt="{{ $product_details->name }}" height="500" width="100%">
                        </a>
                        <div class="product-action">
                            <a href="#" class="cart-btn" data-quantity="1" data-url="{{ $product->getCartUrl('add') }}">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                            <a href="#" class="wishlist-btn" data-url="{{ $product->getWishlistUrl() }}">
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
                        <a href="{{ $product->getUrl() }}" class="product-name">
                            {{ $product_details->name }}
                        </a><!--End product-name-->
                        <ul class="rating">
                            <li class="active"></li>
                            <li class="active"></li>
                            <li class="active"></li>
                            <li class="active"></li>
                            <li class="active"></li>
                        </ul><!--End rating-->
                        <div class="price-box">
                            <span class="price">${{ $product->getDiscount() }}</span>
                            @if ($product->hasOffer())
                                <s class="old-price">${{ $product->getPrice() }}</s>
                            @endif
                        </div><!--End price-box-->
                    </div><!--End product-desc-->
                    <div class="product-full-desc">
                        <a href="{{ $product->getUrl() }}" class="product-name">
                            {{ $product_details->name }}
                        </a><!--End product-name-->
                        <div class="price-rate">
                            <div class="price-box">
                                <span class="price">${{ $product->getDiscount() }}</span>
                                @if ($product->hasOffer())
                                    <s class="old-price">${{ $product->getPrice() }}</s>
                                @endif
                            </div><!--End price-box-->
                            <div class="rate-box">
                                <ul class="rating">
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                </ul><!--End rating-->
                                <span>1 review(s)</span>
                            </div><!--End rate-box-->
                        </div><!--End price-rate-->
                        <p>
                            {{ $product->getDescription() }}
                        </p>
                        <div class="pro-action">
                            <button class="cart-btn text-icon-btn cart-btn" data-quantity="1" data-url="{{ $product->getCartUrl('add') }}">
                                <i class="fa fa-shopping-cart"></i>
                                add to cart
                            </button>
                            <button class="icon-btn wishlist-btn" data-url="{{ $product->getWishlistUrl() }}">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button class="icon-btn">
                                <i class="fa fa-refresh"></i>
                            </button>
                            <button class="icon-btn" data-toggle="modal" data-target="#productModal">
                                <i class="fa fa-search-plus"></i>
                            </button>
                        </div><!--End pro-action-->
                    </div><!--End product-full-desc-->
                </div><!--End product-item-->
            </div><!--End table-cell-->
            @if (($loop->index + 1) % 3 == 0)
            </div>
            <div class="table-row">
            @endif
        @endforeach
    </div><!--End table-row-->

</div><!--End middle-box-->
@include('site.pages.products.templates.pagination', ['paginator' => $products ])
