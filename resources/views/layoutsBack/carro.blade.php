@if( isset($carro))
<a href="#;" class="site-header__cart" title="Cart">
    <i class="icon anm anm-bag-l"></i>
    <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">{{ $quantity }}</span>
  </a>
<div id="header-cart" class="block block-cart">

    <ul class="mini-products-list">
        @foreach ($carro as $carrito)


      <li class="item">
        <a class="product-image" href="#">
          <img class="primary blur-up lazyload" data-src="/productoimage/{{$carrito->image}}"
           alt="Prenda3" title="" />
        </a>
        <div class="product-details">
          <a href="{{ route('cart.remove',array('id'=>$carrito->associatedModel->id)) }}" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
          <a class="pName" href="/">{{ $carrito->name }}</a>
          <div class="wrapQtyBtn">
            <div class="qtyField">
              <span class="label">Cant.:</span>
              <a class="qtyBtn minus" href="{{ route('cart.updatedown',array('id'=> $carrito->associatedModel->id))}}"><i class="fa anm anm-minus-r"
                  aria-hidden="true"></i></a>
              <input type="text" id="Quantity" name="quantity" value="{{ $carrito->quantity }}" class="product-form__input qty" readonly>
              <a class="qtyBtn plus" href="{{ route('cart.updateup',array('id'=> $carrito->associatedModel->id))}}"><i class="fa anm anm-plus-r"
                  aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="priceRow">
            <div class="product-price">
              <span class="money">${{ $carrito->price }}</span>
            </div>
          </div>
        </div>
      </li>
      @endforeach
    </ul>
    <div class="total">
      <div class="total-in">
        <span class="label">Precio Subtotal:</span><span class="product-price"><span
            class="money">${{ $total }}</span></span>
      </div>
      <div class="buttonSet text-center">
        <a href="/" class="btn btn-secondary btn--small">Carrito</a>
        <a href="/" class="btn btn-secondary btn--small">Checkout</a>
      </div>
    </div>
  </div>
  @endif
