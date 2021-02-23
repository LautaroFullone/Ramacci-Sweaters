<style scoped>
.filter-container .row-1 {
  display: grid;
  grid-template-columns: auto auto;
  justify-content: space-between;
  padding: 5px 0;
}
.filter-gender {
  padding-bottom: 15px;
  border-bottom: 1px solid #aaa;
}
.filter-type,
.filter-price,
.filter-sizes {
  margin-top: 20px;
  padding-bottom: 15px;
  border-bottom: 1px solid #aaa;
}
.filter-sizes-content {
  display: grid;
  grid-template-columns: repeat(5, auto);
  justify-content: space-between;
}
.filter-sizes-content label {
  width: 30px;
  height: 30px;
  border: 1px solid #aaa;
  display: flex;
  justify-content: center;
  align-items: center;
}
.filter-sizes-content label:hover {
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
.filter-reset {
  margin: 20px 0;
}
.filter-reset button {
  width: 100%;
  background-color: #000;
  color: #fff;
  text-transform: uppercase;
  font-size: 15px;
  height: 40px;
}
.filter-reset button:hover {
  cursor: pointer;
}
.filter-reset button:active input[type="radio"] {
  content: "";
}

.widget-title::after {
  display: none;
}






.no-products {
  margin-top: 100px;
  font-size: 25px;
  display: flex;
  justify-content: center;
}

.producto-modal {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 720px;
  background-color: #fff;
  z-index: 50;
  padding: 20px 0;
  box-sizing: border-box;
  box-shadow: 0 0 5px 800px rgba(0, 0, 0, 0.7);
}

.grid-view_image {
  height: 294px;
}

.grid-view-item__image {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.grid-view-item__link {
  height: 100%;
}

</style>
<template>

    <div class="container-fluid">

      <ProductQuickView
        class="producto-modal"
        v-if="showModal"
        :product=productForModal
        @close-modal="closeModal"
      />


        <div class="row">
          <!--Sidebar-->
          <div class="col-12 col-sm-12 col-md-3 col-lg-2 sidebar filterbar">
            <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
            <div class="sidebar_tags">
              <!--Categories-->
              <div class="sidebar_widget categories filter-widget">
                <div class="widget-title">
                  <h2>Categorias</h2>
                </div>

                <div class="filter-container">
                  <div class="filter-gender">
                    <div class="row-1">
                      <div class="gender-text">Damas</div>
                      <input v-model="filters.gender" type="radio" name="gender" value="dama">
                    </div>
                    <div class="row-1">
                      <div class="gender-text">Caballeros</div>
                      <input v-model="filters.gender" type="radio" name="gender" value="caballero">
                    </div>
                  </div>

                  <div class="filter-type">
                    <div class="row-1">
                      <div class="type-text">Remeras</div>
                      <input v-model="filters.types" type="checkbox" class="filter-checkbox" value="remeras">
                    </div>
                    <div class="row-1">
                      <div class="type-text">Cardigan</div>
                      <input v-model="filters.types" type="checkbox" class="filter-checkbox" value="cardigan">
                    </div>
                    <div class="row-1">
                      <div class="type-text">Sweaters</div>
                      <input v-model="filters.types" type="checkbox" class="filter-checkbox" value="sweater">
                    </div>
                    <div class="row-1">
                      <div class="type-text">Twin-sets</div>
                      <input v-model="filters.types" type="checkbox" class="filter-checkbox" value="twinset">
                    </div>
                    <div class="row-1">
                      <div class="type-text">Pantalones</div>
                      <input v-model="filters.types" type="checkbox" class="filter-checkbox" value="pantalon">
                    </div>
                    <div class="row-1">
                      <div class="type-text">Bufandas</div>
                      <input v-model="filters.types" type="checkbox" class="filter-checkbox" value="bufanda">
                    </div>
                    <div class="row-1">
                      <div class="type-text">Pashminas</div>
                      <input v-model="filters.types" type="checkbox" class="filter-checkbox" value="pashmina">
                    </div>
                    <div class="row-1">
                      <div class="type-text">Ruanas</div>
                      <input v-model="filters.types" type="checkbox" class="filter-checkbox" value="ruana">
                    </div>
                    <div class="row-1">
                      <div class="type-text">Camperas</div>
                      <input v-model="filters.types" type="checkbox" class="filter-checkbox" value="campera">
                    </div>
                    <div class="row-1">
                      <div class="type-text">Chalecos</div>
                      <input v-model="filters.types" type="checkbox" class="filter-checkbox" value="chaleco">
                    </div>
                  </div>

                  <div class="filter-price">
                    <div class="widget-title">
                      <h2>Precio</h2>
                    </div>

                    <div class="filter-price-content">
                      <div class="row-1">
                        <div class="gender-text">Todos</div>
                        <input v-model="filters.price" type="radio" name="price-range" value="">
                      </div>
                      <div class="row-1">
                        <div class="gender-text">Hasta $2000</div>
                        <input v-model="filters.price" type="radio" name="price-range" value="a">
                      </div>
                      <div class="row-1">
                        <div class="gender-text">$2000 - $5000</div>
                        <input v-model="filters.price" type="radio" name="price-range" value="b">
                      </div>
                      <div class="row-1">
                        <div class="gender-text">$5000 - $8000</div>
                        <input v-model="filters.price" type="radio" name="price-range" value="c">
                      </div>
                      <div class="row-1">
                        <div class="gender-text">Más de $8000</div>
                        <input v-model="filters.price" type="radio" name="price-range" value="d">
                      </div>

                    </div>
                  </div>


                </div>

              </div>
              <!--Categories-->




              <div class="filter-sizes">
                <div class="widget-title">
                  <h2>Talles</h2>
                </div>
                <div class="filter-sizes-content">
                  <div>
                    <input v-model="filters.sizes" type="checkbox" id="size-1" value="1" style="display:none">
                    <label for="size-1">XS</label>
                  </div>
                  <div>
                    <input v-model="filters.sizes" type="checkbox" id="size-2" value="2" style="display:none">
                    <label for="size-2">S</label>
                  </div>
                  <div>
                    <input v-model="filters.sizes" type="checkbox" id="size-3" value="3" style="display:none">
                    <label for="size-3">M</label>
                  </div>
                  <div>
                    <input v-model="filters.sizes" type="checkbox" id="size-4" value="4" style="display:none">
                    <label for="size-4">L</label>
                  </div>
                  <div>
                    <input v-model="filters.sizes" type="checkbox" id="size-5" value="5" style="display:none">
                    <label for="size-5">XL</label>
                  </div>
                </div>

              </div>





              <!--Color Swatches-->
              <!--
              <div class="sidebar_widget filterBox filter-widget">
                <div class="widget-title">
                  <h2>Color</h2>
                </div>
                <div class="filter-color swacth-list clearfix">
                  <span class="swacth-btn black"></span>
                  <span class="swacth-btn white checked"></span>
                  <span class="swacth-btn red"></span>
                  <span class="swacth-btn blue"></span>
                  <span class="swacth-btn pink"></span>
                  <span class="swacth-btn gray"></span>
                  <span class="swacth-btn green"></span>
                  <span class="swacth-btn orange"></span>
                  <span class="swacth-btn yellow"></span>
                  <span class="swacth-btn blueviolet"></span>
                  <span class="swacth-btn brown"></span>
                  <span class="swacth-btn darkGoldenRod"></span>
                  <span class="swacth-btn darkGreen"></span>
                  <span class="swacth-btn darkRed"></span>
                  <span class="swacth-btn dimGrey"></span>
                  <span class="swacth-btn khaki"></span>
                </div>
              </div>
              -->
              <!--End Color Swatches-->

              <div class="filter-reset">
                <button @click="resetFilters">Limpiar filtros</button>
              </div>

              <!--Popular Products-->
              <div class="sidebar_widget">
                <div class="widget-title">
                  <h2>Productos Populares </h2>
                </div>
                <div class="widget-content">
                  <div class="list list-sidebar-products">
                    <div class="grid" v-for="product in populars" :key="product.id">




                      <div class="grid__item">
                        <div class="mini-list-item">
                          <div class="mini-view_image">
                            <a class="grid-view-item__link" href="#">
                              <img class="grid-view-item__image" :src="'/productoimage/' + product.image"
                                alt="" />
                            </a>
                          </div>
                          <div class="details"> <a class="grid-view-item__title" href="#">{{ product.name }}</a>
                            <div class="grid-view-item__meta"><span class="product-price__price"><span
                                  class="money">${{ product.price }}</span></span></div>
                          </div>
                        </div>
                      </div>





                    </div>
                  </div>
                </div>
              </div>
              <!--End Popular Products-->
              <!--Banner-->
              <!--<div class="sidebar_widget static-banner">
                <img src="assets/images/side-banner-2.jpg" alt="" />
              </div>-->
              <!--Banner-->
              <!--Information-->
              <div class="sidebar_widget">
                <div class="widget-title">
                  <h2>Información</h2>
                </div>
                <div class="widget-content">
                  <p>Fieles a nuestro estilo sofisticado y contemporáneo, en Ramacci confeccionamos prendas poniendo
                    especial atención en los detalles.

                    Encontrarás en nuestra marca esfuerzo y tradición haciendo sencillo el complejo proceso de vestir
                    con elegancia y buen gusto.</p>
                </div>
              </div>
              <!--end Information-->

            </div>
          </div>
          <!--End Sidebar-->
          <!--Main Content-->
          <div class="col-12 col-sm-12 col-md-9 col-lg-10 main-col">
            <div class="productList">
              <!--Toolbar-->
              <button type="button" class="btn btn-filter d-block d-md-none d-lg-none">Filtro de producto</button>
              <div class="toolbar">
                <div class="filters-toolbar-wrapper">
                  <div class="row">
                    <div
                      class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">

                    </div>
                    <div
                      class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                      <span class="filters-toolbar__product-count">{{ this.products.length }} artículo<span v-if="this.products.length !== 1">s</span></span>
                    </div>
                    <div class="col-4 col-md-4 col-lg-4 text-right">
                      <div class="filters-toolbar__item">
                        <label for="SortBy" class="hidden">Sort</label>
                        <select v-model="sort" name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                          <option value="none" selected="selected">Ordenar por:</option>
                          <option value="best-selling">Más vendido</option>
                          <option value="best-rating">Más valorado</option>
                          <option value="price-asc">Menor precio</option>
                          <option value="price-desc">Mayor precio</option>
                          <option value="date-back">Más nuevo</option>
                          <option value="date-forw">Más viejo</option>
                          <option value="alpha-asc">A-Z</option>
                          <option value="alpha-desc">Z-A</option>
                        </select>
                        <input class="collection-header__default-sort" type="hidden" value="manual">
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div v-if="products[0]">
              <!--End Toolbar-->
              <div class="grid-products grid--view-items">
                <div class="row">



                    <div v-for ="product in products" :key="product.id" class="col-6 col-sm-6 col-md-4 col-lg-3 grid-view-item style2 item">
                      <div class="grid-view_image">
                        <!-- start product image -->
                        <a :href="'/detalle' + product.id" class="grid-view-item__link">
                          <!-- image -->
                          <img class="grid-view-item__image primary blur-up lazyload"
                            :data-src="'/productoimage/' + product.image"
                            :src="'/productoimage/' + product.image" alt="image" title="product">
                          <!-- End image -->
                          <!-- Hover image -->
                          <img class="grid-view-item__image hover blur-up lazyload"
                            :data-src="'/productoimage/' + product.image"
                            :src="'/productoimage/' + product.image" alt="image" title="product">
                          <!-- End hover image -->
                          <!-- product label -->
                          <div class="product-labels rectangular"><span v-if="product.old_price && product.price" class="lbl on-sale">-{{ product.price_saving }}%</span> <span v-if="product.in_populars == 1"
                              class="lbl pr-label1">nuevo</span></div>
                          <!-- End product label -->
                        </a>
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details hoverDetails text-center mobile">
                          <!-- product name -->
                          <div class="product-name">
                            <a :href="'/detalle' + product.id">{{ product.name }}</a>
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">

                              <span v-if="product.old_price" class="old-price">${{ product.old_price }}</span>

                            <span class="price">${{ product.price }}</span>
                          </div>
                          <!-- End product price -->
                          <div class="product-review">
                            <i class="font-13 fa fa-star" v-for="index in product.rating_rounded" :key="index"></i>
                            <i class="font-13 fa fa-star-o" v-for="index in (5 - product.rating_rounded)" :key="index"></i>
                          </div>
                          <!-- product button -->
                          <div class="button-set">
                            <a @click="openModal(product)" title="Vista Rápida" class="quick-view-popup quick-view"
                              tabindex="0">
                              <i class="icon anm anm-search-plus-r"></i>
                            </a>
                            <!-- Start product button -->
                            <form action="#" method="post">
                              <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i
                                  class="icon anm anm-bag-l"></i></button>
                            </form>
                            <div class="wishlist-btn">
                              <a class="wishlist add-to-wishlist" href="/" title="Lista de Deseos">
                                <i class="icon anm anm-heart-l"></i>
                              </a>
                            </div>

                          </div>
                          <!-- end product button -->
                        </div>
                        <!-- End product details -->
                      </div>
                    </div>








                </div>
              </div>

              </div>

              <div v-else class="no-products">No hay resultados con ese criterio de búsqueda</div>
            </div>
            <!--End Main Content-->
          </div>
        </div>
      </div>
</template>

<!-- belle/shop-fullwidth.html   11 Nov 2019 12:39:06 GMT -->
      <!-- Including Jquery -->
      <script src="/assets/js/vendor/jquery-3.3.1.min.js"></script>
      <script src="/assets/js/vendor/jquery.cookie.js"></script>
      <script src="/assets/js/vendor/modernizr-3.6.0.min.js"></script>
      <script src="/assets/js/vendor/wow.min.js"></script>
      <!-- Including Javascript -->
      <script src="/assets/js/bootstrap.min.js"></script>
      <script src="/assets/js/plugins.js"></script>
      <script src="/assets/js/popper.min.js"></script>
      <script src="/assets/js/lazysizes.js"></script>
      <script src="/assets/js/main.js"></script>

<script>

import ProductQuickView from './ProductQuickView'

    export default {
        components: {
          ProductQuickView
        },
        props: ['productos', 'populars', 'filter1', 'filter2'],
        data() {
            return {
                products: {},
                productForModal: {},
                sort: 'none',
                showModal: false,

                filters: {
                  sort: 'none',
                  gender: '',
                  types: [],
                  price: '',
                  sizes: []
                }
            }
        },
        watch: {
          filters: {
            handler: function(val) {
              // console.log(val);
              this.refiltraTodo(val);
            },
            deep: true
          },
          sort: function(val) {
            this.sorting(val);
          }
        },
        methods: {
          refiltraTodo(filters) {

            // Vuelve a cargar todos los productos en this.products
            this.products = this.productos;
            console.log(this.products);

            // Filtra por género
            if(filters.gender) {
              this.products = this.products.filter(product => product.gender == filters.gender);
            }
            console.log(this.products);



            // Filtra por tipo de prenda
            if(filters.types.length > 0) {
              this.products = this.products.filter(product => filters.types.indexOf(product.category)  > -1);
            }

            // Filtra por precio
            if (filters.price) {
              if(filters.price === 'a') { this.products = this.products.filter(product => product.price <= 2000) }
              if(filters.price === 'b') { this.products = this.products.filter(product => product.price > 2000 && product.price <= 5000) }
              if(filters.price === 'c') { this.products = this.products.filter(product => product.price > 5000 && product.price <= 8000) }
              if(filters.price === 'd') { this.products = this.products.filter(product => product.price > 8000) }
            }

            // Filtra por talles
            if(filters.sizes.length > 0) {
              let temp = [];
              for (let i = 0; i < filters.sizes.length; i++) {
                console.log(filters.sizes[i]);
                temp = temp.concat(this.products.filter(product => product['has_size_' + filters.sizes[i]] == 1));
              }

              this.products = temp.reduce(function(a,b){
                if (a.indexOf(b) < 0 ) a.push(b);
                return a;
              },[]);
            }
          },
          sorting(arr) {

            console.log(arr);

            if (arr == 'none') {
              this.products.sort( function(a, b) {
                if (a.created_at < b.created_at) return -1;
                if (a.created_at > b.created_at) return 1;
                return 0;
              });
            }

            if (arr == 'best-selling') {
              this.products.sort( function(a, b) {
                if (a.amount_sold < b.amount_sold) return 1;
                if (a.amount_sold > b.amount_sold) return -1;
                return 0;
              });
            }

            if (arr == 'best-rating') {
              this.products.sort( function(a, b) {
                if (a.rating < b.rating) return 1;
                if (a.rating > b.rating) return -1;
                return 0;
              });
            }

            if (arr == 'price-asc') {
              this.products.sort( function(a, b) {
                if (a.price < b.price) return -1;
                if (a.price > b.price) return 1;
                return 0;
              });
            }

            if (arr == 'price-desc') {
              this.products.sort( function(a, b) {
                if (a.price < b.price) return 1;
                if (a.price > b.price) return -1;
                return 0;
              });
            }

            if (arr == 'date-back') {
              this.products.sort( function(a, b) {
                if (a.created_at < b.created_at) return 1;
                if (a.created_at > b.created_at) return -1;
                return 0;
              });
            }

            if (arr == 'date-forw') {
              this.products.sort( function(a, b) {
                if (a.created_at < b.created_at) return -1;
                if (a.created_at > b.created_at) return 1;
                return 0;
              });
            }

            if (arr == 'alpha-asc') {
              this.products.sort( function(a, b) {
                if (a.name.toLowerCase() < b.name.toLowerCase()) return -1;
                if (a.name.toLowerCase() > b.name.toLowerCase()) return 1;
                return 0;
              });
            }

            if (arr == 'alpha-desc') {
              this.products.sort( function(a, b) {
                if (a.name.toLowerCase() < b.name.toLowerCase()) return 1;
                if (a.name.toLowerCase() > b.name.toLowerCase()) return -1;
                return 0;
              });
            }

          },
          resetFilters() {
            // Resetea los radio buttons de filter-gender
            var ele = document.getElementsByName("gender");
            for(var i=0;i<ele.length;i++)
                ele[i].checked = false;

            // Resetea los checkbox de filter-types
            var ele = document.getElementsByClassName("filter-checkbox");
            for(var i=0;i<ele.length;i++)
                ele[i].checked = false;


            // Resetea los radio buttons de filter-price
            var ele = document.getElementsByName("price-range");
            for(var i=0;i<ele.length;i++)
                ele[i].checked = false;

            this.filters.sort = 'none';
            this.filters.gender = '';
            this.filters.types = [];
            this.filters.price = '';
            this.filters.sizes = [];

            this.products = this.productos;


          },
          setFiltersFromProps(f1, f2) {
            console.log(f1, f2);
            if (f1 == 'accesorios') {
              this.filters.types = ['pashmina', 'bufanda']
            } else {
              if (f1 != 'dama' && f1 != 'caballero') {
                this.filters.types = [f1];
              } else {
                this.filters.gender = f1;
                if(f2 != null) { this.filters.types = [f2]; }
              }
            }
          },
          openModal(product) {
            this.showModal = true;
            this.productForModal = product;
            console.log(product);
          },
          closeModal() {
            this.showModal = false;
            this.productForModal = {};
          }
        },
        mounted() {
          this.products = this.productos;
          // console.log(this.populars);
          if (this.filter1) { this.setFiltersFromProps(this.filter1, this.filter2); }
        }
    }
</script>
