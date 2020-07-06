<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('img/core-img/logomk.png') }}"/>
        <title>Lista de productos Marketplace - BabyStore</title>
        <!-- Styles -->
        {{-- styles --}}
        @include('layouts.marketplace.style')

    </head>
    <body style="background-image: url('img/bg-img/orquideas.png');">
        <!--<div class="flex-center position-ref full-height" >
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->
        <!-- ##### Header Area Start ##### -->
        <header class="header_area">
            <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
                <!-- Classy Menu -->
                <nav class="classy-navbar" id="essenceNav">
                    <!-- Logo -->
                    <a class="nav-brand" href="{{ route('welcome')}}"><img src="{{ asset('img/core-img/logomk.png') }}" alt=""></a>
                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="#">Categorias <i class="fa fa-angle-down"></i>
                                </a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Niñas</li>
                                            <li><a href="{{ route('articulo')}}">Vestidos</a></li>
                                            <li><a href="{{ route('articulo')}}">Conjuntos</a></li>
                                            <li><a href="{{ route('articulo')}}">Blusas</a></li>
                                            <li><a href="{{ route('articulo')}}">Rompers</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Niños</li>
                                            <li><a href="{{ route('articulo')}}">Camisas</a></li>
                                            <li><a href="{{ route('articulo')}}">Sueter</a></li>
                                            <li><a href="{{ route('articulo')}}">Pantalones</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Bebes niños</li>
                                            <li><a href="{{ route('articulo')}}">Bodys</a></li>
                                            <li><a href="{{ route('articulo')}}">Pantalón</a></li>
                                            <li><a href="{{ route('articulo')}}">Sueter y camisa</a></li>
                                            <li><a href="{{ route('articulo')}}">Bragas</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Bebes niñas</li>
                                            <li><a href="{{ route('articulo')}}">Bodys</a></li>
                                            <li><a href="{{ route('articulo')}}">Vestidos</a></li>
                                            <li><a href="{{ route('articulo')}}">Conjuntos</a></li>
                                        </ul>
                                        <div class="single-mega cn-col-4">
                                            <img src="{{ asset('img/bg-img/megamenu.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{ route('blog')}}">Blog</a></li>
                                <li><a href="{{ route('outlet')}}">Outlet</a></li>

                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>

                <!-- Header Meta Data -->
                <div class="header-meta d-flex clearfix justify-content-end">
                    <!-- Search Area -->
                    <div class="search-area">
                        <form action="#" method="post">
                            <input type="search" name="search" id="headerSearch" placeholder="Busca tu producto">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <!-- Favourite Area -->
                    <div class="favourite-area">
                        <a href="#"><img src="{{ asset('img/core-img/heart.svg') }}" alt=""></a>
                    </div>
                    <!-- User Login Info -->
                    <div class="user-login-info">
                        <a href="#"><img src="{{ asset('img/core-img/user.svg') }}" alt=""></a>
                    </div>
                    <!-- Cart Area -->
                    <div class="cart-area">
                        <a href="#" id="essenceCartBtn"><img src="{{ asset('img/core-img/bag.svg') }}" alt=""> <span>3</span></a>
                    </div>
                </div>

            </div>
        </header>
        <!-- ##### Header Area End ##### -->

        <!-- ##### Right Side Cart Area ##### -->
        <div class="cart-bg-overlay"></div>

        <div class="right-side-cart-area">

            <!-- Cart Button -->
            <div class="cart-button">
                <a href="#" id="rightSideCart"><img src="{{ asset('img/core-img/bag.svg') }}" alt=""> <span>3</span></a>
            </div>

            <div class="cart-content d-flex">

                <!-- Cart List Area -->
                <div class="cart-list">
                    <!-- Single Cart Item -->
                    <div class="single-cart-item">
                        <a href="#" class="product-image">
                            <img src="{{ asset('img/product-img/product-1.jpg') }}"  class="rounded" alt="">
                            <!-- Cart Item Desc -->
                            <div class="cart-item-desc">
                              <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                                <span class="badge">Mango</span>
                                <h6>Button Through Strap Mini Dress</h6>
                                <p class="size">Size: S</p>
                                <p class="color">Color: Red</p>
                                <p class="price">$45.00</p>
                            </div>
                        </a>
                    </div>

                    <!-- Single Cart Item -->
                    <div class="single-cart-item">
                        <a href="#" class="product-image">
                            <img src="{{ asset('img/product-img/product-2.jpg') }}" class="rounded" alt="">
                            <!-- Cart Item Desc -->
                            <div class="cart-item-desc">
                              <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                                <span class="badge">Mango</span>
                                <h6>Button Through Strap Mini Dress</h6>
                                <p class="size">Size: S</p>
                                <p class="color">Color: Red</p>
                                <p class="price">$45.00</p>
                            </div>
                        </a>
                    </div>

                    <!-- Single Cart Item -->
                    <div class="single-cart-item">
                        <a href="#" class="product-image">
                            <img src="{{ asset('img/product-img/product-3.jpg') }}" class="rounded" alt="">
                            <!-- Cart Item Desc -->
                            <div class="cart-item-desc">
                              <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                                <span class="badge">Mango</span>
                                <h6>Button Through Strap Mini Dress</h6>
                                <p class="size">Size: S</p>
                                <p class="color">Color: Red</p>
                                <p class="price">$45.00</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Cart Summary -->
                <div class="cart-amount-summary">

                    <h2>Tu compra</h2>
                    <ul class="summary-table">
                        <li><span>Subtotal:</span> <span>$274.00</span></li>
                        <li><span>Envio:</span> <span>Free</span></li>
                        <li><span>Descuento:</span> <span>-15%</span></li>
                        <li><span>Total:</span> <span>$232.00</span></li>
                    </ul>
                    <div class="checkout-btn mt-100">
                        <a href="{{ route('compra') }}" class="btn essence-btn">Finalizar compra</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Right Side Cart End ##### -->

        <!-- ##### Breadcumb Area Start ##### -->
        <div class="breadcumb_area bg-img">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="page-title text-center">
                            <h2>Articulos</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Breadcumb Area End ##### -->

        <!-- ##### Shop Grid Area Start ##### -->
        <section class="shop_grid_area section-padding-80">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="shop_sidebar_area">

                            <!-- ##### Single Widget ##### -->
                            <div class="widget catagory mb-50">
                                <!-- Widget Title -->
                                <h6 class="widget-title mb-30">Categorias</h6>

                                <!--  Catagories  -->
                                <div class="catagories-menu">
                                    <ul id="menu-content2" class="menu-content collapse show">
                                        <!-- Single Item -->
                                        <li data-toggle="collapse" data-target="#clothing">
                                            <a href="#">Vestuario</a>
                                            <ul class="sub-menu collapse show" id="clothing">
                                                <li><a href="#">Todos</a></li>
                                                <li><a href="#">Bodys</a></li>
                                                <li><a href="#">Vestidos</a></li>
                                                <li><a href="#">Conjuntos</a></li>
                                                <li><a href="#">Faldas</a></li>
                                                <li><a href="#">Pantalones</a></li>
                                                <li><a href="#">Camisas</a></li>
                                                <li><a href="#">Camisetas</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Item -->
                                        <li data-toggle="collapse" data-target="#shoes" class="collapsed">
                                            <a href="#">Calzado</a>
                                            <ul class="sub-menu collapse" id="shoes">
                                                <li><a href="#">Todos</a></li>
                                                <li><a href="#">Clasico</a></li>
                                                <li><a href="#">Deportivo</a></li>
                                                <li><a href="#">Casual</a></li>
                                                <li><a href="#">Zandalias</a></li>
                                            </ul>
                                        </li>
                                        <!-- Single Item -->
                                        <li data-toggle="collapse" data-target="#accessories" class="collapsed">
                                            <a href="#">Complementos</a>
                                            <ul class="sub-menu collapse" id="accessories">
                                                <li><a href="#">Todos</a></li>
                                                <li><a href="#">Ganchos</a></li>
                                                <li><a href="#">Bolsos</a></li>
                                                <li><a href="#">Medias</a></li>
                                                <li><a href="#">Turbantes</a></li>
                                                <li><a href="#">Cintillos</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- ##### Single Widget ##### -->
                            <div class="widget price mb-50">
                                <!-- Widget Title -->
                                <h6 class="widget-title mb-30">Filtrar por</h6>
                                <!-- Widget Title 2 -->
                                <p class="widget-title2 mb-30">Precio</p>

                                <div class="widget-desc">
                                    <div class="slider-range">
                                        <div data-min="49" data-max="360" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="49" data-value-max="360" data-label-result="Range:">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range-price">Rango: $49.000 - $360.000</div>
                                    </div>
                                </div>
                            </div>

                            <!-- ##### Single Widget ##### -->
                            <div class="widget color mb-50">
                                <!-- Widget Title 2 -->
                                <p class="widget-title2 mb-30">Color</p>
                                <div class="widget-desc">
                                    <ul class="d-flex">
                                        <li><a href="#" class="color1"></a></li>
                                        <li><a href="#" class="color2"></a></li>
                                        <li><a href="#" class="color3"></a></li>
                                        <li><a href="#" class="color4"></a></li>
                                        <li><a href="#" class="color5"></a></li>
                                        <li><a href="#" class="color6"></a></li>
                                        <li><a href="#" class="color7"></a></li>
                                        <li><a href="#" class="color8"></a></li>
                                        <li><a href="#" class="color9"></a></li>
                                        <li><a href="#" class="color10"></a></li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-12 col-md-8 col-lg-9">
                        <div class="shop_grid_product_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="product-topbar d-flex align-items-center justify-content-between">
                                        <!-- Total Products -->
                                        <div class="total-products">
                                            <p><span>186</span> Productos encontrados</p>
                                        </div>
                                        <!-- Sorting -->
                                        <div class="product-sorting d-flex">
                                            <p>Ordenar por:</p>
                                            <form action="#" method="get">
                                                <select name="select" id="sortByselect">
                                                    <option value="value">Nuevos</option>
                                                    <option value="value">Descuentos</option>
                                                    <option value="value">Precio: mayor a menor</option>
                                                    <option value="value">Precio: menor a mayor</option>
                                                </select>
                                                <input type="submit" class="d-none" value="">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">


                                <!-- Single Product -->
                                @foreach ($vestuario as $item)
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="single-product-wrapper">
                                        <!-- Product Image -->
                                        <div class="product-img">
                                            <img src="{{ $item->imagen2 }}" alt="">
                                            <!-- Hover Thumb -->
                                            <img class="hover-img" src="{{ $item->imagen3 }}" alt="">

                                            <!-- Product Badge -->
                                            <div class="product-badge new-badge">
                                                <span>Nuevo</span>
                                            </div>

                                            <!-- Favourite -->
                                            <div class="product-favourite">
                                                <a href="#" class="favme fa fa-heart"></a>
                                            </div>
                                        </div>

                                        <!-- Product Description -->
                                        <div class="product-description">
                                            <span>topshop</span>
                                            <a href="{{ route('articulo') }}">
                                                <h6>{{ $item->nombre }}</h6>
                                            </a>
                                            <p class="product-price">${{ number_format($item->precio, 0, ',', '.') }}</p>

                                            <!-- Hover Content -->
                                            <div class="hover-content">
                                                <!-- Agregar al carrito -->
                                                <div class="add-to-cart-btn">
                                                    <a href="#" class="btn essence-btn">Agregar al carrito</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                        </div>
                        <!-- Pagination -->
                        <nav aria-label="navigation">
                            <ul class="pagination mt-50 mb-70">
                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">21</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Shop Grid Area End ##### -->


        <!-- ##### Footer Area Start ##### -->
        <footer class="footer_area clearfix">
            <div class="container">
                <div class="row">
                    <!-- Single Widget Area -->
                    <div class="col-12 col-md-6">
                        <div class="single_widget_area d-flex mb-30">
                            <!-- Logo -->
                            <div class="footer-logo mr-50">
                                <a href="{{ route('welcome') }}"><img src="{{ asset('img/core-img/logomk.png') }}" alt=""></a>
                            </div>
                            <!-- Footer Menu -->
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="shop.html">Productos</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="contact.html">Servicio al cliente</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Widget Area -->
                    <div class="col-12 col-md-6">
                        <div class="single_widget_area mb-30">
                            <ul class="footer_widget_menu">
                                <li><a href="#">Tratamiento de datos personales</a></li>
                                <li><a href="#">Terminos de uso</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row align-items-end">
                    <!-- Single Widget Area -->
                    <div class="col-12 col-md-6">
                        <div class="single_widget_area">
                            <div class="footer_heading mb-30">
                                <h6>Subscribete</h6>
                            </div>
                            <div class="subscribtion_form">
                                <form action="#" method="post">
                                    <input type="email" name="mail" class="mail" placeholder="Introduce tu correo">
                                    <button type="submit" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Single Widget Area -->
                    <div class="col-12 col-md-6">
                        <div class="single_widget_area">
                            <div class="footer_social_area">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

    <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> Juyi</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>

            </div>
        </footer>
        <!-- ##### Footer Area End ##### -->
        <!--JavaScript-->
        {{-- Script --}}
        @include('layouts.marketplace.script')

    </body>

    </html>
