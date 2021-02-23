<style scoped>
.modal-container {
  position: relative;
  width: 720px;
  min-height: 400px;
  max-height: 450px;
  display: grid;
  grid-template-columns: 45% auto;
  grid-column-gap: 20px;
  justify-content: space-between;
  background-color: #fff;

}
.image-container {
  overflow: hidden;
  margin-left: 20px;
  max-height: 400px;
}
.image-container img {
  width: 100%;
  object-fit: cover;
}
.info-container {
  margin-right: 20px;
  display: grid;
  align-content: space-between;
  padding-bottom: 20px;
}
.info-container .code-row {
  display: grid;
  grid-template-columns: auto auto;
  grid-column-gap: 30px;
  justify-content: start;
}
.info-container .in-stock {
  color: #447900;
}
.product-form__item {
  white-space: nowrap;
}
.product-single__price {
  margin: 10px 0;
}
.sizes {
  width: 100%;
  margin-bottom: 20px;
}
.sizes-content {
  width: 200px;
  display: grid;
  grid-template-columns: repeat(5, 35px);
  justify-content: start;
}
.sizes-content label {
  width: 30px;
  height: 30px;
  border: 1px solid #aaa;
  display: flex;
  justify-content: center;
  align-items: center;
}
.sizes-content label:hover {
  cursor: pointer;
}
#size-1:checked ~ label,
#size-2:checked ~ label,
#size-3:checked ~ label,
#size-4:checked ~ label,
#size-5:checked ~ label {
  color: #fff;
  background-color: brown;
}

.product-action {
  width: 100%;
  display: grid;
  grid-template-columns: 90px auto;
  justify-content: space-between;
}
.product-form__item--submit {
  width: 100%;
  margin-bottom: 20px;
}
.product-form__item--submit button {
  width: 250px;
  margin-right: 10px;
}
.close-modal {
  position:absolute;
  top: -20px;
  right: 0;
  width: 30px;
  height: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>

<template>
  <div>
    <div class="modal-container">

      <div class="close-modal" @click="closeModal">
       <i class="icon icon anm anm-times-l"></i>
      </div>



      <div class="image-container">
        <img :src="'/productoimage/' + product.image" alt="" />
      </div>

      <div class="info-container">
        <div class="product-name">
          <h2 class="product-single__title">{{ product.name }}</h2>
        </div>
        <div class="code-row">
          <div v-if="product.stock >= 1" class="in-stock">En Stock</div>
          <div v-else class="in-stock">Sin Stock</div>
          <div class="code">Código: <span>{{ product.code }}</span></div>
        </div>

        <p class="product-single__price product-single__price-product-template">
          <span class="visually-hidden">Regular price</span>
          <s v-if="product.old_price" id="ComparePrice-product-template"><span class="money">${{ product.old_price }}</span></s>
          <span
            class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
            <span id="ProductPrice-product-template"><span class="money">${{ product.price }}</span></span>
          </span>
        </p>

        <div class="product-single__description rte">
          {{ product.description }}
        </div>


        <form method="post" action="http://annimexweb.com/cart/add" id="product_form_10508262282"
          accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown"
          enctype="multipart/form-data">



          <div class="swatch clearfix swatch-0 option1" data-option-index="0">
            <div class="product-form__item">
              <label class="header">Color: <span class="slVariant">Rojo</span></label>
              <div data-value="Black" class="swatch-element color black available">
                <input class="swatchInput" id="swatch-0-black" type="radio" name="option-0"
                  value="Black"><label class="swatchLbl color large" for="swatch-0-black"
                  style="background-color:black;" title="Black"></label>
              </div>
              <div data-value="Maroon" class="swatch-element color maroon available">
                <input class="swatchInput" id="swatch-0-maroon" type="radio" name="option-0"
                  value="Maroon"><label class="swatchLbl color large" for="swatch-0-maroon"
                  style="background-color:maroon;" title="Maroon"></label>
              </div>
              <div data-value="Blue" class="swatch-element color blue available">
                <input class="swatchInput" id="swatch-0-blue" type="radio" name="option-0"
                  value="Blue"><label class="swatchLbl color large" for="swatch-0-blue"
                  style="background-color:blue;" title="Blue"></label>
              </div>
              <div data-value="Dark Green" class="swatch-element color dark-green available">
                <input class="swatchInput" id="swatch-0-dark-green" type="radio" name="option-0"
                  value="Dark Green"><label class="swatchLbl color large" for="swatch-0-dark-green"
                  style="background-color:darkgreen;" title="Dark Green"></label>
              </div>
              <div data-value="Red" class="swatch-element color red available">
                <input class="swatchInput" id="swatch-0-red" type="radio" name="option-0"
                  value="Red"><label class="swatchLbl color large" for="swatch-0-red"
                  style="background-color:red;" title="Rojo"></label>
              </div>
              <div data-value="Violet" class="swatch-element color violet available">
                <input class="swatchInput" id="swatch-0-violet" type="radio" name="option-0"
                  value="Violet"><label class="swatchLbl color large" for="swatch-0-violet"
                  style="background-color:Violet;" title="Violeta"></label>
              </div>
              <div data-value="Orangered" class="swatch-element color orangered available">
                <input class="swatchInput" id="swatch-0-dark-orangered" type="radio" name="option-0"
                  value="Orangered"><label class="swatchLbl color large" for="swatch-0-orangered"
                  style="background-color:orangered;" title="Naranja"></label>
              </div>
            </div>
          </div>

          <div class="sizes">
            <div class="widget-title">
              <div>Talles</div>
            </div>
            <div class="sizes-content">
              <div v-if="product.has_size_1 == 1">
                <input type="checkbox" id="size-1" value="1" style="display:none">
                <label for="size-1">XS</label>
              </div>
              <div v-if="product.has_size_2 == 1">
                <input type="checkbox" id="size-2" value="2" style="display:none">
                <label for="size-2">S</label>
              </div>
              <div v-if="product.has_size_3 == 1">
                <input type="checkbox" id="size-3" value="3" style="display:none">
                <label for="size-3">M</label>
              </div>
              <div v-if="product.has_size_4 == 1">
                <input type="checkbox" id="size-4" value="4" style="display:none">
                <label for="size-4">L</label>
              </div>
              <div v-if="product.has_size_5 == 1">
                <input type="checkbox" id="size-5" value="5" style="display:none">
                <label for="size-5">XL</label>
              </div>
            </div>
          </div>


          <!-- Product Action -->
          <div class="product-action">
            <div class="product-form__item--quantity">
              <div class="wrapQtyBtn">
                <div class="qtyField">
                  <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r"
                      aria-hidden="true"></i></a>
                  <input type="text" id="Quantity" name="quantity" value="1"
                    class="product-form__input qty">
                  <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r"
                      aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
            <div class="product-form__item--submit">
              <button type="button" name="add" class="btn">
                <span>Añadir al Carro</span>
              </but
            </div>
          </div>
          <!-- End Product Action -->

          <div class="display-table shareRow">
              <div class="wishlist-btn">
                <i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Añadir a la lista de deseos</span>
              </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</template>

<script>


  export default {
    props: ['product'],
    methods: {
      closeModal() {
        this.$emit('close-modal');
      }
    }
  }
</script>
