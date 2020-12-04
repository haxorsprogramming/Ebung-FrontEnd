<!DOCTYPE html>
<html>

<head>
    <title>Ebunga - Homepage</title>
    <meta charset="utf-8">
    <!-- bootstrap vs fontawesome-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="css/style-homev3.css"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('ladun/homepage/css_asset/style-homev3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ladun/homepage/css_asset/style-res-v3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ladun/homepage/css_asset/style-fix-nav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ladun/homepage/css_asset/style-form-search-mobile.css') }}">
    
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('ladun/homepage/css_asset/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ladun/homepage/css_asset/slick-theme.css') }}">
    <!-- GG FONT -->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body>
    <header class="container" id="header-v3">

        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 logo"><a href="#"><img src="{{ asset('ladun/homepage/pic_asset/logo/logo.png') }}" alt="holiwood"></a></div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 menu-mobile">
                <div class=" collapse navbar-collapse" id="myNavbar">

                    <form class="hidden-lg hidden-md form-group form-search-mobile">
                        <input type="text" name="search" placeholder="Search here..." class="form-control">
                        <button type="submit"><img src="{{ asset('ladun/homepage/pic_asset/util/Search.png') }}" alt="search" class="img-responsive"></button>
                    </form>
                    <ul class="nav navbar-nav menu-main">

                        <li class="dropdown menu-home">
                            <a href="#" id="home-menu" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                            <ul class="menu-home-lv2 dropdown-menu">
                                <li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="homev1.html">Home 1</a></li>
                                <li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="homev2.html">Home 2</a></li>
                                <li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="homev3.html">Home 3</a></li>

                            </ul>
                        </li>
                        <li class="shop-menu dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop +</a>
                            <figure id="shop-1" class=" hidden-sm hidden-md hidden-xs"></figure>
                            <div class="dropdown-menu">
                                <div class="container container-menu">
                                    <ul class="row">
                                        <li class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                            <ul>
                                                <li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
                                                    <ul>
                                                        <li><a href="#">SHOP PAGE</a> </li>
                                                        <li class="li-home li-one"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="shop-right-sidebar.html">Right sidebar</a></li>
                                                        <li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="shop-left-sidebar.html">Left sidebar</a></li>
                                                        <li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="shop-full-screen.html">Full screen</a></li>
                                                        <li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="shop-full-width.html">Full width</a></li>
                                                        <li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="singel-detail.html">Singel detail</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
                                                    <ul>
                                                        <li><a href="#">CHECKING PAGE</a></li>
                                                        <li class="li-home li-one"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="shopping-cart.html">Shopping Cart</a></li>
                                                        <li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="checkout.html">Checkout</a></li>
                                                        <li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="order.html">Order</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 menu-home-lv2">
                                                    <ul>
                                                        <li><a href="#">OTHER PAGE</a></li>
                                                        <li class="li-home li-one"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="FAQ.html">FAQ</a></li>
                                                        <li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="login_register.html">Login/Register</a></li>
                                                        <li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="page404.html">Page404</a></li>
                                                        <li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="tracking.html">Tracking</a></li>
                                                        <li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="wishlist.html">Wishlist</a></li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="col-lg-4 col-md-4 hidden-sm hidden-xs li-banner">
                                            <a href="#"><img src="http://landing.engotheme.com/html/jenstore/demo/img/Shop-now-banner.png" alt="banner"></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="wedding-menu"><a href="about.html">About Us</a>
                            <figure id="wedding-1" class=" hidden-sm hidden-md hidden-xs"></figure>
                        </li>
                        <li class="blog-menu dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                            <figure id="blog-1" class=" hidden-sm hidden-md hidden-xs"></figure>
                            <ul class="menu-home-lv2 dropdown-menu">
                                <li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="blog.html">Blog right sidebar</a></li>
                                <li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="blog-left-sidebar.html">Blog Left sidebar</a></li>
                                <li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="blog-no-sidebar.html">Blog no sidebar</a></li>
                                <li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="singel-post-left-sidebar.html">Singel post left sidebar</a></li>
                                <li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="singel-post-right-sidebar.html">Singel post right sidebar</a></li>
                                <li class="li-home"><i class="fas fa-long-arrow-alt-right hidden-sm hidden-md hidden-xs"></i><a href="singel-post-no-sidebar.html">Singel post no sidebar</a></li>
                            </ul>
                        </li>
                        <li class="contact-menu"><a href="contact.html">Contact</a>
                            <figure id="contact-1" class=" hidden-sm hidden-md hidden-xs"></figure>
                        </li>
                        <li class="hidden-lg hidden-md"><a href="#"><i class="far fa-user"></i> My Account</a></li>
                        <li>
                            <figure id="btn-close-menu" class="hidden-lg hidden-md"><i class="far fa-times-circle"></i></figure>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-10 col-xs-9">
                <ul class="nav navbar-nav navbar-right icon-menu">


                    <li id="input-search" class="hidden-sm hidden-xs">
                        <a href="#"><img id="search-img" src="{{ asset('ladun/homepage/pic_asset/util/Search.png') }}" alt="search"></a>

                    </li>
                    <li class="icon-user hidden-sm hidden-xs"><a href="#"><i class="far fa-user"></i></a></li>
                    <li class="dropdown cart-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://landing.engotheme.com/html/jenstore/demo/img/cart.png" id="img-cart" alt="cart"></a>
                        <div class="dropdown-menu">
                            <div class="cart-1">
                                <div class="img-cart"><img src="http://landing.engotheme.com/html/jenstore/demo/img/collec-1.jpg" class="img-responsive" alt="holiwood"></div>
                                <div class="info-cart">
                                    <h1>Pink roses</h1>
                                    <span class="number">x1</span>
                                    <span class="prince-cart">$207.2</span>
                                </div>
                            </div>
                            <div class="cart-1">
                                <div class="img-cart"><img src="http://landing.engotheme.com/html/jenstore/demo/img/collec-1.jpg" class="img-responsive" alt="holiwood"></div>
                                <div class="info-cart">
                                    <h1>Eleganr by BloomNation</h1>
                                    <span class="number">x1</span>
                                    <span class="prince-cart">$207.2</span>
                                </div>
                            </div>
                            <div class="cart-1">
                                <div class="img-cart"><img src="http://landing.engotheme.com/html/jenstore/demo/img/collec-1.jpg" class="img-responsive" alt="holiwood"></div>
                                <div class="info-cart">
                                    <h1>Queen Rose - Yellow</h1>
                                    <span class="number">x1</span>
                                    <span class="prince-cart">$207.2</span>
                                </div>
                            </div>
                            <div class="total">
                                <span>Total:</span>
                                <span>$621.6</span>
                            </div>
                            <div id="div-cart-menu">
                                <a href="#">ADD TO CART</a>
                                <a href="#" class="check">CHECK VIEW</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="navbar-header mobile-menu">
                <button type="button" class="navbar-toggle btn-menu-mobile" data-toggle="collapse" data-target="#myNavbar">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>

    </header>