<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="img/core-img/pestana.png"/>
        <title>Marketplace - BabyStore</title>
        <!-- Styles -->
        {{-- styles --}}
        @include('layouts.marketplace.style')

    </head>
    <body style="background: #fedbb2;">
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
                    <a class="nav-brand" href="{{ route('welcome')}}"><img src="img/core-img/suckers.png" alt=""></a>
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
                        <a href="{{ route('login') }}"><img src="{{ asset('img/core-img/user.svg') }}" alt=""></a>
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

        <!-- ##### Welcome Area Start ##### -->
        <section class="welcome_area bg-img background-overlay" style="background-image: url('img/bg-img/HOME.jpg');">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-content">
                            <h6>Lanzamiento</h6>
                            <h2>Ver colección</h2>
                            <a href="{{ route('productos') }}" class="btn essence-btn">Ver productos</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Welcome Area End ##### -->

        <!-- ##### Top Catagory Area Start ##### -->
        <div class="top_catagory_area section-padding-80 clearfix">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Single Catagory -->
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url('img/bg-img/vestuario.jpg');">
                            <div class="catagory-content">
                                <a href="#">Vestuario</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Catagory -->
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url('img/bg-img/calzado.jpg');">
                            <div class="catagory-content">
                                <a href="#">Calzado</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Catagory -->
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url('img/bg-img/complementos.jpg');">
                            <div class="catagory-content">
                                <a href="#">Complementos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Top Catagory Area End ##### -->


        <!-- ##### New Arrivals Area Start ##### -->
        <section class="new_arrivals_area section-padding-80 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <h2>Productos En oferta</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="popular-products-slides owl-carousel">
                            @foreach ($oferta as $item)
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="{{ $item->imagen2 }}" alt="">
                                    <!-- Hover Thumb -->
                                    <img class="hover-img" src="{{ $item->imagen3 }}" alt="">

                                    <!-- Product Badge -->
                                    <div class="product-badge offer-badge">
                                        <span>-{{ $item->descuento }}%</span>
                                    </div>

                                    <!-- Favourite -->
                                    <div class="product-favourite">
                                        <a href="#" class="favme fa fa-heart"></a>
                                    </div>
                                </div>
                                <!-- Product Description -->
                                <div class="product-description">
                                    <span>Baby Shop</span>
                                    <a href="single-product-details.html">
                                        <h6>{{ $item->nombre }}</h6>
                                    </a>
                                    <p class="product-price"><span class="old-price">${{ number_format($item->precioanterior, 0, ',', '.') }}</span>${{ number_format($item->precio, 0, ',', '.') }}</p>

                                    <!-- Hover Content -->
                                    <div class="hover-content">
                                        <!-- Agregar al carrito -->
                                        <div class="add-to-cart-btn">
                                            <a href="#" class="btn essence-btn">Agregar al carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                          <a href="{{ route('outlet') }}" class="btn essence-btn">Ver mas productos</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### New Arrivals Area End ##### -->


        <!-- ##### Footer Area Start ##### -->
        <footer class="footer_area clearfix">
            <div class="container">
                <div class="row">
                    <!-- Single Widget Area -->
                    <div class="col-12 col-md-6">
                        <div class="single_widget_area d-flex mb-30">
                            <!-- Logo -->
                            <div class="footer-logo mr-50">
                                <a href="{{ route('welcome') }}"><img src="img/core-img/suckers.png" alt=""></a>
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
