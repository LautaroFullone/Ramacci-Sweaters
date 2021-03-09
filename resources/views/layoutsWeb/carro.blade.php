
@if($user=!null && isset($imagen))
<a href="#;" class="site-header__cart" title="Cart">
    <i class="icon anm anm-bag-l"></i>
    <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">{{ $quantity }}</span>
</a>
<div id="header-cart" class="block block-cart">
    <ul class="mini-products-list">
        @for ($i = 0; $i < count($images); $i++)
        <li class="item">
            <a class="product-image" href="#">
            <img src="images/products/{{$images[$i]->src}}">

            </a>
            <div class="product-details">
                <a href="#" class="remove"><i class="anm anm-times-l"
                        aria-hidden="true"></i></a>
                <a href="#" class="edit-i remove"><i class="anm anm-edit"
                        aria-hidden="true"></i></a>
                <a class="pName" href="/">{{ $carro[$i+1]->name }}</a>
                <!--<div class="variant-cart">Black / XL</div>-->
                <div class="wrapQtyBtn">
                    <div class="qtyField">
                        <span class="label">Qty:</span>
                        <a class="qtyBtn minus" href="javascript:void(0);"><i
                                class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                        <input type="text" id="Quantity" name="quantity" value="{{ $quantity }}"
                            class="product-form__input qty">
                        <a class="qtyBtn plus" href="javascript:void(0);"><i
                                class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="priceRow">
                    <div class="product-price">
                        <span class="money">${{ $carro[$i+1]->price }}</span>
                    </div>
                </div>
            </div>
        </li>
        @endfor
    </ul>
    <div class="total">
        <div class="total-in">
            <span class="label">Cart Subtotal:</span><span class="product-price"><span
                    class="money">${{ $total }}</span></span>
        </div>
        <div class="buttonSet text-center">
            <a href="/" class="btn btn-secondary btn--small">View Cart</a>
            <a href="/" class="btn btn-secondary btn--small">Checkout</a>
        </div>
    </div>
</div>
@endif
