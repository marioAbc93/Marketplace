<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('img/core-img/logomk.png') }}"/>
        <title>Finalizar compra Marketplace - BabyStore</title>
        <!-- Styles -->
        {{-- styles --}}
        @include('layouts.marketplace.style')

    </head>
    <body style="background-color: #ffffff">
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
        <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="page-title text-center">
                            <h2>Checkout</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Breadcumb Area End ##### -->

        <!-- ##### Checkout Area Start ##### -->
        <div class="checkout_area section-padding-80">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-page-heading mb-30">
                                <h5>Datos del comprador</h5>
                            </div>

                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="first_name">Nombres <span>*</span></label>
                                        <input type="text" class="form-control" id="first_name" value="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="last_name">Apellidos <span>*</span></label>
                                        <input type="text" class="form-control" id="last_name" value="" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="country">Pais <span>*</span></label>
                                        <select class="w-100" id="country">
                                            <option value="usa">Colombia</option>
                                        </select>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="street_address">Dirección <span>*</span></label>
                                        <input type="text" class="form-control mb-3" id="street_address" value="">
                                        <input type="text" class="form-control" id="street_address2" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="city">Departamento <span>*</span></label>
                                        <input type="text" class="form-control" id="city" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="state">Cesar<span>*</span></label>
                                        <input type="text" class="form-control" id="state" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="phone_number">Telefono <span>*</span></label>
                                        <input type="number" class="form-control" id="phone_number" min="0" value="">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="email_address">Correo electronico <span>*</span></label>
                                        <input type="email" class="form-control" id="email_address" value="">
                                    </div>

                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox d-block mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Terminos y condiciones</label>
                                        </div>
                                        <div class="custom-control custom-checkbox d-block mb-2">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Crear una cuenta</label>
                                        </div>
                                        <div class="custom-control custom-checkbox d-block">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">Suscribirse a nuestro boletín</label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                        <div class="order-details-confirmation">

                            <div class="cart-page-heading">
                                <h5>Tu pedido</h5>
                                <p>Los detalles</p>
                            </div>

                            <ul class="order-details-form mb-4">
                                <li><span>Producto</span> <span>Total</span></li>
                                <li><span>Cocktail Yellow dress</span> <span>$59.900</span></li>
                                <li><span>Subtotal</span> <span>$59.900</span></li>
                                <li><span>Envio</span> <span>Gratis</span></li>
                                <li><span>Total</span> <span>$59.900</span></li>
                            </ul>

                            <div id="accordion" role="tablist" class="mb-4">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h6 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="fa fa-circle-o mr-3"></i>Paypal</a>
                                        </h6>
                                    </div>

                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-circle-o mr-3"></i>Pago contraentrega</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-circle-o mr-3"></i>Tarjeta de credito</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingFour">
                                        <h6 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour"><i class="fa fa-circle-o mr-3"></i>Transferencia bancaria</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="btn essence-btn">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Checkout Area End ##### -->

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
