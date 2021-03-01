<!DOCTYPE html>
<html class="no-js" lang="es">

<!-- belle/contact-us.html   11 Nov 2019 12:44:39 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Ramacci Sweaters - Fabrica de prendas de punto - desde 1996 en Mar del Plata.</title>
  <meta name="description" content="description">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
  <!-- Plugins CSS -->
  <link rel="stylesheet" href="assets/css/plugins.css">
  <!-- Bootstap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Main Style CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<style scoped>

.under-construction {
  height: 40vh;
  display: grid;
  justify-content: center;
  align-content: center;
  text-align: center;
}
</style>

<body class="contact-template page-template belle">

    @include('layoutsWeb.whatsapp')
  <div class="pageWrapper">
    <!--Search Form Drawer-->
    <div class="search">
      <div class="search__form">
        <form class="search-bar__form" action="#">
          <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
          <input class="search__input" type="search" name="q" value="" placeholder="Buscar en toda la tienda..."
            aria-label="Search" autocomplete="off">
        </form>
        <button type="button" class="search-trigger close-btn"><i class="icon anm anm-times-l"></i></button>
      </div>
    </div>
    <!--End Search Form Drawer-->
    <!--Top Header-->
    <!--End Top Header-->
    <!--Header-->
    <div class="header-wrap animated d-flex">
      <div class="container-fluid">
        <div class="row align-items-center">
          <!--Desktop Logo-->
          <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
            <a href="/">
              <img src="assets/images/logo/LOGO_RAMACCI 141x36.png" alt="Ramacci Sweaters" title="Ramacci Sweaters" />
            </a>
          </div>
          <!--End Desktop Logo-->
          <div class="col-2 col-sm-3 col-md-3 col-lg-8">
            <div class="d-block d-lg-none">
              <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                <i class="icon anm anm-times-l"></i>
                <i class="anm anm-bars-r"></i>
              </button>
            </div>
            <!--Desktop Menu-->
            <nav class="grid__item" id="AccessibleNav">
              <!-- for mobile -->
              <ul id="siteNav" class="site-nav medium center hidearrow">
                <li class="lvl1 parent megamenu"><a href="/">Inicio <i class="anm anm-angle-down-l"></i></a>
                  <ul class="dropdown">
                    <li><a href="/nosotros" class="site-nav">Nosotros <span class=""></span> </a></li>
                    <li><a href="/faqs" class="site-nav">FAQs</a></li>
                  </ul>
                </li>
                @if ($user==null)
                <li class="lvl1 parent megamenu"><a>Cuenta <i class="anm anm-angle-down-l"></i></a>
                    <ul class="dropdown">
                      <li><a href="/register" class="site-nav">Registrarse <span class=""></span> </a></li>
                      <li><a href="/login" class="site-nav">Iniciar sesion</a></li>
                    </ul>
                </li>
                @else
                <li class="lvl1 parent megamenu"><a>{{ $user->name }} <i class="anm anm-angle-down-l"></i></a>
                    <ul class="dropdown">
                      <li><a href="/carro-index" class="site-nav">Mis compras <span class=""></span> </a></li>
                      <li><a href="/logout" class="site-nav">Cerrar sesion</a></li>
                    </ul>
                </li>
                @endif
                <li class="lvl1 parent megamenu"><a href="/tienda">Tienda<i
                      class="anm anm-angle-down-l"></i></a>

                </li>
                <li class="lvl1 parent megamenu"><a href="#">Colecciones <i class="anm anm-angle-down-l"></i></a>
                  <div class="megamenu style2" style="width:550px">
                    <ul class="grid mmWrapper">
                      <li class="grid__item one-whole" style="padding-left: 0 !important">
                        <ul class="grid text-center" style="width: 100%; margin-left: 0 !important">
                          <li class="grid__item lvl-1 col-md-3 col-lg-4"><a href="/tienda/dama" class="site-nav lvl-1">Damas</a>
                            <ul class="subLinks">
                              <li class="lvl-2"><a href="/tienda/dama/sweater" class="site-nav lvl-2">Sweaters</a></li>
                              <li class="lvl-2"><a href="/tienda/dama/twinset" class="site-nav lvl-2">Twim-Set</a></li>
                              <li class="lvl-2"><a href="/tienda" class="site-nav lvl-2">Talles
                                  Especiales</a></li>
                            </ul>
                          </li>
                          <li class="grid__item lvl-1 col-md-3 col-lg-4"><a href="/tienda/caballero"
                              class="site-nav lvl-1">Caballeros</a>
                            <ul class="subLinks">
                              <li class="lvl-2"><a href="/tienda/caballero/sweater" class="site-nav lvl-2">Sweaters</a></li>
                              <li class="lvl-2"><a href="/tienda/caballero/campera" class="site-nav lvl-2">Camperas</a></li>
                              <li class="lvl-2"><a href="/tienda/caballero/chaleco" class="site-nav lvl-2">Chalecos</a></li>
                            </ul>
                          </li>
                          <li class="grid__item lvl-1 col-md-3 col-lg-4"><a href="/tienda/accesorios"
                              class="site-nav lvl-1">Accesorios</a>
                            <ul class="subLinks">
                              <li class="lvl-2"><a href="/tienda/pashmina" class="site-nav lvl-2">Pashminas</a></li>
                              <li class="lvl-2"><a href="/tienda/bufanda" class="site-nav lvl-2">Bufandas</a></li>
                              <li class="lvl-2"><a href="/tienda/pantalon" class="site-nav lvl-2">Pantalones</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="grid__item large-up--one-whole imageCol"><a href="/contacto"><img
                            src="assets/images/megamenu-bg23.jpg" alt=""></a></li>
                    </ul>
                  </div>
                </li>

                <li class="lvl1 parent dropdown"><a href="/blog">Blog <i
                      class="anm anm-angle-down-l"></i></a>
                </li>
                <li class="lvl1 parent dropdown"><a href="/contacto">Contacto<i
                      class="anm anm-angle-down-l"></i></a>

                </li>
                <li class="lvl1"><a href="https://api.whatsapp.com/send?phone=54223684-9431&text=Hola%20!%20quisiera%20realizar%20una%20consulta.%20Muchas%20Gracias"><b>WhatsApp</b> <i class="anm anm-angle-down-l"></i></a></li>
              </ul>
            </nav>
            <!--End Desktop Menu-->
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
            <div class="logo">
              <a href="/">
                <img src="assets/images/logo/LOGO_RAMACCI 141x36.png" alt="Ramacci Sweaters" title="Ramacci Sweaters" />
              </a>
            </div>
          </div>
          <div class="col-4 col-sm-3 col-md-3 col-lg-2">
            <div class="site-cart">
              <a href="#" class="site-header__cart" title="Cart">
                <i class="icon anm anm-bag-l"></i>
                <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span>
              </a>
              <!--Minicart Popup-->
              <div id="header-cart" class="block block-cart">
                <ul class="mini-products-list">
                  <li class="item">
                    <a class="product-image" href="#">
                      <img src="assets/images/fotosramacci2/IMG_0335.jpg" alt="3/4 Sleeve Kimono Dress" title="" />
                    </a>
                    <div class="product-details">
                      <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                      <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                      <a class="pName" href="/">Sweaters</a>
                      <div class="variant-cart">Negro / XL</div>
                      <div class="wrapQtyBtn">
                        <div class="qtyField">
                          <span class="label">Cant.:</span>
                          <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r"
                              aria-hidden="true"></i></a>
                          <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                          <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r"
                              aria-hidden="true"></i></a>
                        </div>
                      </div>
                      <div class="priceRow">
                        <div class="product-price">
                          <span class="money">$59.00</span>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="item">
                    <a class="product-image" href="#">
                      <img src="assets/images/fotosramacci2/IMG_0345.jpg" alt="Elastic Waist Dress - Black / Small"
                        title="" />
                    </a>
                    <div class="product-details">
                      <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                      <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                      <a class="pName" href="/">Camperas</a>
                      <div class="variant-cart">Gris/ XXL</div>
                      <div class="wrapQtyBtn">
                        <div class="qtyField">
                          <span class="label">Cant.:</span>
                          <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r"
                              aria-hidden="true"></i></a>
                          <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                          <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r"
                              aria-hidden="true"></i></a>
                        </div>
                      </div>
                      <div class="priceRow">
                        <div class="product-price">
                          <span class="money">$99.00</span>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="total">
                  <div class="total-in">
                    <span class="label">Valor Subtotal:</span><span class="product-price"><span
                        class="money">$748.00</span></span>
                  </div>
                  <div class="buttonSet text-center">
                    <a href="/" class="btn btn-secondary btn--small">Carrito</a>
                    <a href="/" class="btn btn-secondary btn--small">Checkout</a>
                  </div>
                </div>
              </div>
              <!--End Minicart Popup-->
            </div>
            <!--
            <div class="site-header__search">
              <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
            </div>
            -->
          </div>
        </div>
      </div>
    </div>
    <!--End Header-->
    <!--Mobile Menu-->
    <div class="mobile-nav-wrapper" role="navigation">
      <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Cerrar Menu</div>
      <ul id="MobileNav" class="mobile-nav">
        <li class="lvl1 parent megamenu"><a href="/">Inicio <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="/nosotros" class="site-nav">Nosotros</a></li>
            <li><a href="/faqs" class="site-nav">FAQs</a></li>
          </ul>
        </li>
        @if ($user==null)
        <li class="lvl1 parent megamenu"><a>Cuenta <i class="anm anm-angle-down-l"></i></a>
            <ul class="dropdown">
                <li><a href="/register" class="site-nav">Registrarse <span class=""></span> </a></li>
                <li><a href="/login" class="site-nav">Iniciar sesion</a></li>
            </ul>
        </li>
        @else
        <li class="lvl1 parent megamenu"><a>{{ $user->name }} <i class="anm anm-angle-down-l"></i></a>
            <ul class="dropdown">
                <li><a href="/carro-index" class="site-nav">Mis compras <span class=""></span> </a></li>
                <li><a href="/logout" class="site-nav">Cerrar sesion</a></li>
            </ul>
        </li>
        @endif
        <li class="lvl1 parent megamenu"><a href="/tienda">Tienda <i class=""></i></a>

        </li>
        <li class="lvl1 parent megamenu"><a href="#">Colecciones <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="/tienda" class="site-nav">Damas<i class="anm anm-plus-l"></i></a>
              <ul>
                <li class="lvl-2"><a href="/tienda/dama/sweater" class="site-nav lvl-2">Sweaters</a></li>
                <li class="lvl-2"><a href="/tienda/dama/twinset" class="site-nav lvl-2">Twin-Set</a></li>
                <li class="lvl-2"><a href="/tienda" class="site-nav lvl-2">Talles Especiales</a></li>
              </ul>
            </li>
            <li><a href="/tienda/caballero" class="site-nav">Caballeros<i class="anm anm-plus-l"></i></a>
              <ul>
                <li class="lvl-2"><a href="/tienda/caballero/sweater" class="site-nav lvl-2">Sweaters</a></li>
                <li class="lvl-2"><a href="/tienda/caballero/campera" class="site-nav lvl-2">Camperas</a></li>
                <li class="lvl-2"><a href="/tienda/caballero/chaleco" class="site-nav lvl-2">Chalecos</a></li>
              </ul>
            </li>
            <li><a href="/tienda/accesorios" class="site-nav">Accesorios<i class="anm anm-plus-l"></i></a>
              <ul>
                <li class="lvl-2"><a href="/tienda/pashmina" class="site-nav lvl-2">Pashminas</a></li>
                <li class="lvl-2"><a href="/tienda/bufanda" class="site-nav lvl-2">Bufandas</a></li>
                <li class="lvl-2"><a href="/tienda/pantalon" class="site-nav lvl-2">Pantalones</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="lvl1 parent megamenu"><a href="/blog">Blog </a>
        </li>
        <li class="lvl1 parent megamenu"><a href="/contacto">Contacto </a>
        </li>
        <li class="lvl1"><a href="https://api.whatsapp.com/send?phone=54223684-9431&text=Hola%20!%20quisiera%20realizar%20una%20consulta.%20Muchas%20Gracias"><b>WhatsApp</b></a>
        </li>
      </ul>
    </div>
    <!--End Mobile Menu-->

    <!--Body Content-->
    <div id="page-content">
      <!--Page Title-->
      <div class="page section-header text-center">
        <div class="page-title">
          <div class="wrapper">
            <h1 class="page-width">Blog</h1>
          </div>
        </div>
      </div>
      <!--End Page Title-->

      <div class="bredcrumbWrap">
        <div class="container breadcrumbs">
          <a href="/" title="Back to the home page">Inicio</a><span
            aria-hidden="true">›</span><span>Blog</span>
        </div>
      </div>

      <div class="container main-container">
        <div class="under-construction">
        <i class="fa fa-tools"></i>
          Esta sección está en construcción.
        </div>
      </div>

    </div>
    <!--End Body Content-->

    <!--Footer-->
    <footer id="footer">
      <div class="newsletter-section">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
              <div class="display-table">
                <div class="display-table-cell footer-newsletter">
                  <div class="section-header text-center">
                    <label class="h2"><span>Recibir </span>Novedades</label>
                  </div>
                  <form action="#" method="post">
                    <div class="input-group">
                      <input type="email" class="input-group__field newsletter__input" name="EMAIL" value=""
                        placeholder="Correo Electronico" required="">
                      <span class="input-group__btn">
                        <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span
                            class="newsletter__submit-text--large">Suscribite</span></button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
              <div class="footer-social">
                <ul class="list--inline site-footer__social-icons social-icons">
                  <li><a class="social-icons__link" href="https://www.facebook.com/tejidosramacci" target="_blank" title="Ramacci Facebook"><i
                        class="icon icon-facebook"></i></a></li>
                  <li><a class="social-icons__link" href="https://www.instagram.com/ramaccisweaters/" target="_blank" title="Ramacci Instagram"><i
                        class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                  <li><a class="social-icons__link" href="/" target="_blank" title="Ramacci YouTube"><i
                        class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="site-footer">
        <div class="container">
          <!--Footer Links-->
          <div class="footer-top">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                <h4 class="h4">Artículos</h4>
                <ul>
                  <li><a href="/tienda/dama">Dama</a></li>
                  <li><a href="/tienda/caballero">Hombre</a></li>
                  <li><a href="/tienda/sweater">Sweaters</a></li>
                  <li><a href="/tienda/accesorios">Accesorios</a></li>
                  <li><a href="/tienda/pashmina">Pashminas</a></li>
                </ul>
              </div>
              <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                <h4 class="h4">Informacion</h4>
                <ul>
                  <li><a href="/nosotros">Nosotros</a></li>
                  <li><a href="/blog">Blog</a></li>
                  <li><a href="/">FAQs</a></li>
                  <li><a href="/"> </a></li>
                  <li><a href="/productos">Mi Cuenta</a></li>
                </ul>
              </div>
              <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                <h4 class="h4">Servicios al cliente</h4>
                <ul>
                  <li><a href="/">Solicitar datos personales</a></li>
                  <li><a href="/"> FAQs</a></li>
                  <li><a href="/contacto">Contacto</a></li>
                  <li><a href="/">Pedidos y devolucioness</a></li>
                  <li><a href="/">Centro de Apoyo</a></li>
                </ul>
              </div>
              <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                <h4 class="h4">Contacto</h4>
                <ul class="addressFooter">
                  <li><i class="icon anm anm-map-marker-al"></i>
                    <p>Av Juan B. Justo <br>1335, Mar del Plata</p>
                  </li>
                  <li class="phone"><i class="icon anm anm-phone-s"></i>
                    <p>(223) 489-0176</p>
                  </li>
                  <li class="email"><i class="icon anm anm-envelope-l"></i>
                    <p>info@ramacci.com.ar</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--End Footer Links-->
          <hr>
          <div class="footer-bottom">
            <div class="row">
              <!--Footer Copyright-->
              <div
                class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left">
                <span></span> <a href="https://temberweb.com" target="_blank">Design by Tember</a></div>
              <!--End Footer Copyright-->
              <!--Footer Payment Icon-->
              <div
                class="col-12 col-sm-12 col-md-6 col-lg-6 order-0 order-md-1 order-lg-1 order-sm-0 payment-icons text-right text-md-center">
                <ul class="payment-icons list--inline">
                  <li><i class="icon fa fa-cc-visa" aria-hidden="true"></i></li>
                  <li><i class="icon fa fa-cc-mastercard" aria-hidden="true"></i></li>
                  <!--<li><i class="icon fa fa-cc-discover" aria-hidden="true"></i></li>-->
                  <!--<li><i class="icon fa fa-cc-paypal" aria-hidden="true"></i></li>-->
                  <li><i class="icon fa fa-cc-amex" aria-hidden="true"></i></li>
                  <li><i class="icon fa fa-credit-card" aria-hidden="true"></i></li>
                </ul>
              </div>
              <!--End Footer Payment Icon-->
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--End Footer-->
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->

    <!-- Including Jquery -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/jquery.cookie.js"></script>
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <!-- Including Javascript -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/lazysizes.js"></script>
    <script src="assets/js/main.js"></script>
  </div>
</body>

<!-- belle/contact-us.html   11 Nov 2019 12:44:39 GMT -->

</html>
