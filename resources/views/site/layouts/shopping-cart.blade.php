<a class="cart-title" href="{{ route('site.cart.index') }}">
    <i class="fa fa-shopping-cart"></i>
    <span class="cart-text">my cart</span>
    <span class="cart-count">{{ $basket->itemCount() }}</span>
</a><!--End cart-title-->
<div class="cart-cont">
    <div class="cart-items">
        @foreach ($basket->all() as $item)
            @php
                $item_details = $item->translated();
                $image = $item->getImages()[0];
            @endphp
            <a href="{{ $item->getUrl() }}">
                <img src="{{ $image->url }}">
                <p class="product-name">
                    {{ $item_details->name }}
                </p>
                <div class="product-price">
                    {{ $item->quantity }} x
                    <span class="price">${{ $item->getDiscount() }}</span>
                </div>
                <div class="product-remove cart-btn" data-quantity="0" data-url="{{ route('site.cart.update' , ['slug' => $item_details->slug]) }}">
                    <i class="fa fa-close"></i>
                </div><!-- .product-remove -->
            </a>
        @endforeach
    </div><!--End cart-items-->
    <div class="shipping">
        <p>Sub Total</p>
        <p>${{ $basket->subTotal() }}</p>
    </div>
    <a href="" class="cart-button">Checkout</a>
</div><!--End cart-cont-->
