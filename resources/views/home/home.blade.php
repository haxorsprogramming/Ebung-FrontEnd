<!DOCTYPE html>
<html>

<head>
    <title>homev3</title>
    <meta charset="utf-8">
    <!-- bootstrap vs fontawesome-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
                                <div class="img-cart"><img src="img/collec-1.jpg" class="img-responsive" alt="holiwood"></div>
                                <div class="info-cart">
                                    <h1>Pink roses</h1>
                                    <span class="number">x1</span>
                                    <span class="prince-cart">$207.2</span>
                                </div>
                            </div>
                            <div class="cart-1">
                                <div class="img-cart"><img src="img/collec-2.jpg" class="img-responsive" alt="holiwood"></div>
                                <div class="info-cart">
                                    <h1>Eleganr by BloomNation</h1>
                                    <span class="number">x1</span>
                                    <span class="prince-cart">$207.2</span>
                                </div>
                            </div>
                            <div class="cart-1">
                                <div class="img-cart"><img src="img/collec-3.jpg" class="img-responsive" alt="holiwood"></div>
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
    <main>
        <div class="content-search">

            <div class="container container-100">
                <i class="far fa-times-circle" id="close-search"></i>
                <h3 class="text-center">what are your looking for ?</h3>
                <form method="get" action="/search" role="search" style="position: relative;">
                    <input type="text" class="form-control control-search" value="" autocomplete="off" placeholder="Enter Search ..." aria-label="SEARCH" name="q">

                    <button class="button_search" type="submit">search</button>
                </form>
            </div>

        </div>
        <div class="slider-banner">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active slide1">
                        <img src="http://landing.engotheme.com/html/jenstore/demo/img/homev3-slider1.jpg" alt="holiwood">
                        <div class="carousel-caption">
                            <h3>IT'S YOUR DAY !</h3>
                            <h1>Happy<br>Birthday.</h1>
                            <a href="#">Shop now</a>
                        </div>
                    </div>

                    <div class="item slide2">
                        <img src="http://landing.engotheme.com/html/jenstore/demo/img/homev3-slider1.jpg" alt="holiwood">
                        <div class="carousel-caption">
                            <h1>New<br>Collections</h1>
                            <h2>A PERPECT BOUQUET</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>

                    <div class="item slide1">
                        <img src="http://landing.engotheme.com/html/jenstore/demo/img/homev3-slider1.jpg" alt="holiwood">
                        <div class="carousel-caption">
                            <h3>IT'S YOUR DAY !</h3>
                            <h1>Happy<br>Birthday.</h1>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                    <div class="item slide2">
                        <img src="http://landing.engotheme.com/html/jenstore/demo/img/homev3-slider1.jpg" alt="holiwood">
                        <div class="carousel-caption">
                            <h1>New<br>Collections</h1>
                            <h2>A PERPECT BOUQUET</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="show-img">
            <div class="container">
                <div class="row">
                    <div class="show-item">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-1">
                            <figure id="figure-show-1"><a href="#"><img src="http://landing.engotheme.com/html/jenstore/demo/img/homev3-show-image1.jpg" class="img-responsive" alt="holiwood"></a></figure>
                            <div class="show-title-1">
                                <h1>Lavender<br>Collections</h1>
                                <h2>SALE UP TO 20% OFF</h2>
                                <a href="#">Read more</a>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-2">
                            <figure id="figure-show-2"><a href="#"><img src="http://landing.engotheme.com/html/jenstore/demo/img/homev3-show-image2.jpg" class="img-responsive" alt="holiwood"></a></figure>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 item-3">
                            <figure id="figure-show-3"><a href="#"><img src="http://landing.engotheme.com/html/jenstore/demo/img/homev3-show-image3.jpg" class="img-responsive" alt="holiwood"></a></figure>
                            <div class="show-title-2 title-1">
                                <h1>Rose</h1>
                                <span>( 40 items )</span>
                            </div>

                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 item-4">
                            <figure id="figure-show-4"><a href="#"><img src="http://landing.engotheme.com/html/jenstore/demo/img/homev3-show-image4.jpg" class="img-responsive" alt="holiwood"></a></figure>
                            <div class="show-title-2 title-2">
                                <h2>SALE UP TO 30% OFF</h2>
                                <h1>Happy<br>Women's day</h1>
                                <a href="#">Shop now</a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="category">
            <!-- Modal quick view -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                        </div>
                        <div class="modal-body">
                            <div class="tab-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div id="img-pill-1" class="tab-pane fade in active">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 title-quick">
                                            <figure class="fi-quick">
                                                <h1>QUICK VIEW</h1>
                                            </figure>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 detail">
                                        <h1>Queen Rose - Pink</h1>
                                        <p class="p1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <div class="star">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            <span>10 Rating(s) | Add Your Rating</span>
                                        </div>
                                        <div class="prince"><span>$250.9</span><s class="strike">$300.02</s></div>
                                        <figure class="fi-option">
                                            <p class="option">Option</p>
                                        </figure>
                                        <div class="size">
                                            <span class="lb-size">Size <span class="sta-red">*</span></span><span class="lb-color">Color <span class="sta-red">*</span></span>
                                        </div>
                                        <div class="select-custom">
                                            <select>
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                            </select>
                                            <a href="#"><span class="color-1"></span></a> <a href="#"><span class="color-2"></span></a> <a href="#"><span class="color-3"></span></a> <a href="#"><span class="color-4"></span></a>
                                            <p class="require">Required Fields <span>*</span></p>
                                            <div class="Quality">

                                                <div class="input-group input-number-group">
                                                    <span class="text-qua">Quanty:</span>
                                                    <div class="input-group-button">
                                                        <span class="input-number-decrement">-</span>
                                                    </div>
                                                    <input class="input-number" type="number" min="0" max="1000" value="01">
                                                    <div class="input-group-button">
                                                        <span class="input-number-increment">+</span>
                                                    </div>
                                                    <span class="dola">$ </span><span class="total">250.9</span>
                                                </div>

                                            </div>
                                            <div class="add-cart">
                                                <a href="#" class="btn-add-cart">Add to cart</a>
                                                <a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
                                                <a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="img-pill-2" class="tab-pane fade">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 title-quick">
                                            <figure class="fi-quick">
                                                <h1>QUICK VIEW</h1>
                                            </figure>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <img src="img/queen.jpg" class="img-responsive" alt="holiwood">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 detail">
                                        <h1>Queen Rose</h1>
                                        <p class="p1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <div class="star">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            <span>10 Rating(s) | Add Your Rating</span>
                                        </div>
                                        <div class="prince"><span>$300.02</span><s class="strike">$250.9</s></div>
                                        <figure class="fi-option">
                                            <p class="option">Option</p>
                                        </figure>
                                        <div class="size">
                                            <span class="lb-size">Size <span class="sta-red">*</span></span><span class="lb-color">Color <span class="sta-red">*</span></span>
                                        </div>
                                        <div class="select-custom">
                                            <select>
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                            </select>
                                            <a href="#"><span class="color-1"></span></a> <a href="#"><span class="color-2"></span></a> <a href="#"><span class="color-3"></span></a> <a href="#"><span class="color-4"></span></a>
                                            <p class="require">Required Fields <span>*</span></p>
                                            <div class="Quality">

                                                <div class="input-group input-number-group">
                                                    <span class="text-qua">Quanty:</span>
                                                    <div class="input-group-button">
                                                        <span class="input-number-decrement">-</span>
                                                    </div>
                                                    <input class="input-number" type="number" min="0" max="1000" value="01">
                                                    <div class="input-group-button">
                                                        <span class="input-number-increment">+</span>
                                                    </div>
                                                    <span class="dola">$ </span><span class="total">250.9</span>
                                                </div>

                                            </div>
                                            <div class="add-cart">
                                                <a href="#" class="btn-add-cart">Add to cart</a>
                                                <a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
                                                <a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="img-pill-3" class="tab-pane fade">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 title-quick">
                                            <figure class="fi-quick">
                                                <h1>QUICK VIEW</h1>
                                            </figure>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <img src="img/laven.jpg" class="img-responsive" alt="holiwood">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 detail">
                                        <h1>Lavender</h1>
                                        <p class="p1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <div class="star">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            <span>10 Rating(s) | Add Your Rating</span>
                                        </div>
                                        <div class="prince"><span>$300.02</span><s class="strike">$250.9</s></div>
                                        <figure class="fi-option">
                                            <p class="option">Option</p>
                                        </figure>
                                        <div class="size">
                                            <span class="lb-size">Size <span class="sta-red">*</span></span><span class="lb-color">Color <span class="sta-red">*</span></span>
                                        </div>
                                        <div class="select-custom">
                                            <select>
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                            </select>
                                            <a href="#"><span class="color-1"></span></a> <a href="#"><span class="color-2"></span></a> <a href="#"><span class="color-3"></span></a> <a href="#"><span class="color-4"></span></a>
                                            <p class="require">Required Fields <span>*</span></p>
                                            <div class="Quality">

                                                <div class="input-group input-number-group">
                                                    <span class="text-qua">Quanty:</span>
                                                    <div class="input-group-button">
                                                        <span class="input-number-decrement">-</span>
                                                    </div>
                                                    <input class="input-number" type="number" min="0" max="1000" value="01">
                                                    <div class="input-group-button">
                                                        <span class="input-number-increment">+</span>
                                                    </div>
                                                    <span class="dola">$ </span><span class="total">250.9</span>
                                                </div>

                                            </div>
                                            <div class="add-cart">
                                                <a href="#" class="btn-add-cart">Add to cart</a>
                                                <a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
                                                <a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div id="img-pill-4" class="tab-pane fade">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 title-quick">
                                            <figure class="fi-quick">
                                                <h1>QUICK VIEW</h1>
                                            </figure>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <img src="img/collec-3.jpg" class="img-responsive" alt="holiwood">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 detail">
                                        <h1>Queen Rose - Yellow</h1>
                                        <p class="p1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <div class="star">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            <span>10 Rating(s) | Add Your Rating</span>
                                        </div>
                                        <div class="prince"><span>$300.02</span><s class="strike">$250.9</s></div>
                                        <figure class="fi-option">
                                            <p class="option">Option</p>
                                        </figure>
                                        <div class="size">
                                            <span class="lb-size">Size <span class="sta-red">*</span></span><span class="lb-color">Color <span class="sta-red">*</span></span>
                                        </div>
                                        <div class="select-custom">
                                            <select>
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                            </select>
                                            <a href="#"><span class="color-1"></span></a> <a href="#"><span class="color-2"></span></a> <a href="#"><span class="color-3"></span></a> <a href="#"><span class="color-4"></span></a>
                                            <p class="require">Required Fields <span>*</span></p>
                                            <div class="Quality">

                                                <div class="input-group input-number-group">
                                                    <span class="text-qua">Quanty:</span>
                                                    <div class="input-group-button">
                                                        <span class="input-number-decrement">-</span>
                                                    </div>
                                                    <input class="input-number" type="number" min="0" max="1000" value="01">
                                                    <div class="input-group-button">
                                                        <span class="input-number-increment">+</span>
                                                    </div>
                                                    <span class="dola">$ </span><span class="total">250.9</span>
                                                </div>

                                            </div>
                                            <div class="add-cart">
                                                <a href="#" class="btn-add-cart">Add to cart</a>
                                                <a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
                                                <a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-pills col-lg-6 col-md-6 col-sm-6 col-xs-12 img-pill">
                                <li class="active col-lg-4 col-md-4 col-sm-4 col-xs-12"><a data-toggle="pill" href="#img-pill-1"><img src="img/wedding-1.jpg" class="img-responsive" alt="holiwood"></a></li>
                                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a data-toggle="pill" href="#img-pill-2"><img src="img/queen.jpg" class="img-responsive" alt="holiwood"></a></li>
                                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a data-toggle="pill" href="#img-pill-3"><img src="img/laven.jpg" class="img-responsive" alt="holiwood"></a></li>
                                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a data-toggle="pill" href="#img-pill-4"><img src="img/collec-3.jpg" class="img-responsive" alt="holiwood"></a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
            <!-- --------------------------- -->
            <div class="container">
                <h1>Category of Jenstore</h1>
                <ul class="nav nav-tabs menu-category">
                    <li class="new-menu active"><a data-toggle="tab" href="#menu-tab-new" id="new-menu">New Arrivals</a>
                        <figure id="new-2" class="hidden-xs"></figure>
                    </li>
                    <li class="shop-menu"><a data-toggle="tab" href="#menu-tab-shop">Shop</a>
                        <figure id="shop-2" class="hidden-xs"></figure>
                    </li>
                    <li class="wedding-menu"><a data-toggle="tab" href="#menu-tab-wedding">Wedding</a>
                        <figure id="wedding-2" class="hidden-xs"></figure>
                    </li>
                    <li class="holiday-menu"><a data-toggle="tab" href="#menu-tab-holiday">Holiday</a>
                        <figure id="holiday-2" class="hidden-xs"></figure>
                    </li>
                    <li class="other-menu"><a data-toggle="tab" href="#menu-tab-other">Other</a>
                        <figure id="other-2" class="hidden-xs"></figure>
                    </li>
                </ul>
                <div class="row">
                    <div class="tab-content">

                        <!-- ------tab new---------------- -->
                        <div id="menu-tab-new" class="tab-pane fade in active">


                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <figure class="sale"><a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a></figure>
                                    <div class="product-icon-category">
                                        <a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>

                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Queen Rose - Pink</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                    <div class="prince">$300.2<s class="strike">$250.9</s></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a>
                                    <div class="product-icon-category">
                                        <a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Bouquet Lavender</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$160.8</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <figure class="hot"><a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a></figure>
                                    <div class="product-icon-category">
                                        <a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Fun & Flirty By BloomNation</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$200.7</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a>
                                    <div class="product-icon-category">
                                        <a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Bouquet Rose</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$350.4</div>
                                </div>
                            </div>
                            <!-- ------------------------------------------------ -->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a>
                                    <div class="product-icon-category">
                                        <a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Elegant by BloomNation</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                    <div class="prince">$300.2<s class="strike">$250.9</s></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <figure class="hot"><a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a></figure>
                                    <div class="product-icon-category">
                                        <a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Tulipa Floriade - Red</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$160.8</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a>
                                    <div class="product-icon-category">
                                        <a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Winter White Bouquet</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$200.7</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <figure class="hot"><a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a></figure>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Rose - Red</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$350.4</div>
                                </div>
                            </div>
                        </div>
                        <!-- ------------end new arrial---- -->
                        <!-- ------------tab shop----------------- -->
                        <div id="menu-tab-shop" class="tab-pane fade">


                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <figure class="sale"><a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a></figure>
                                    <div class="product-icon-category">
                                        <a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Queen Rose - Pink</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                    <div class="prince">$300.2<s class="strike">$250.9</s></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a>
                                    <div class="product-icon-category">
                                        <a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Bouquet Lavender</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$160.8</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <figure class="hot"><a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a></figure>
                                    <div class="product-icon-category">
                                        <a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Fun & Flirty By BloomNation</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$200.7</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a>
                                    <div class="product-icon-category">
                                        <a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Bouquet Rose</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$350.4</div>
                                </div>
                            </div>
                            <!-- ------------------------------------------------ -->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a>
                                    <div class="product-icon-category">
                                        <a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Elegant by BloomNation</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                    <div class="prince">$300.2<s class="strike">$250.9</s></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <figure class="hot"><a href="#"><img src="i{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a></figure>
                                    <div class="product-icon-category">
                                        <a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Tulipa Floriade - Red</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$160.8</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Winter White Bouquet</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$200.7</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <figure class="hot"><a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a></figure>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Rose - Red</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$350.4</div>
                                </div>
                            </div>
                        </div>
                        <!-- -------------------------end tab shop--------------------- -->
                        <!-- ------tab wedding---------------- -->
                        <div id="menu-tab-wedding" class="tab-pane fade">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <figure class="sale"><a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a></figure>
                                    <div class="product-icon-category">
                                        <a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>

                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Queen Rose - Pink</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                    <div class="prince">$300.2<s class="strike">$250.9</s></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Bouquet Lavender</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$160.8</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <figure class="hot"><a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a></figure>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Fun & Flirty By BloomNation</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$200.7</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Bouquet Rose</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$350.4</div>
                                </div>
                            </div>
                            <!-- ------------------------------------------------ -->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Elegant by BloomNation</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                    <div class="prince">$300.2<s class="strike">$250.9</s></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <figure class="hot"><a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a></figure>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Tulipa Floriade - Red</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$160.8</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Winter White Bouquet</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$200.7</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <figure class="hot"><a href="#"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a></figure>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Rose - Red</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$350.4</div>
                                </div>
                            </div>
                        </div>
                        <!-- ------------end wedding---- -->
                        <!-- ------------tab holiday----------------- -->
                        <div id="menu-tab-holiday" class="tab-pane fade">


                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <figure class="sale"><a href="#"><img src="img/wedding-3.jpg" class="img-responsive" alt="holiwood"></a></figure>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Queen Rose - Pink</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                    <div class="prince">$300.2<s class="strike">$250.9</s></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <a href="#"><img src="img/holiday-2.jpg" class="img-responsive" alt="holiwood"></a>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Bouquet Lavender</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$160.8</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <figure class="hot"><a href="#"><img src="img/holiday-3.jpg" class="img-responsive" alt="holiwood"></a></figure>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Fun & Flirty By BloomNation</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$200.7</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <a href="#"><img src="img/wedding-1.jpg" class="img-responsive" alt="holiwood"></a>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Bouquet Rose</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$350.4</div>
                                </div>
                            </div>
                            <!-- ------------------------------------------------ -->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <a href="#"><img src="img/collec-3.jpg" class="img-responsive" alt="holiwood"></a>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Elegant by BloomNation</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                    <div class="prince">$300.2<s class="strike">$250.9</s></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <figure class="hot"><a href="#"><img src="img/wedding-1.jpg" class="img-responsive" alt="holiwood"></a></figure>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Tulipa Floriade - Red</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$160.8</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <a href="#"><img src="img/holiday-1.jpg" class="img-responsive" alt="holiwood"></a>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Winter White Bouquet</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$200.7</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <figure class="hot"><a href="#"><img src="img/cate-1.jpg" class="img-responsive" alt="holiwood"></a></figure>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Rose - Red</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$350.4</div>
                                </div>
                            </div>
                        </div>
                        <!-- -------------------------end tab holiday--------------------- -->
                        <!-- ------------tab other----------------- -->
                        <div id="menu-tab-other" class="tab-pane fade">


                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <figure class="sale"><a href="#"><img src="img/wedding-3.jpg" class="img-responsive" alt="holiwood"></a></figure>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Queen Rose - Pink</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                    <div class="prince">$300.2<s class="strike">$250.9</s></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <a href="#"><img src="img/holiday-2.jpg" class="img-responsive" alt="holiwood"></a>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Bouquet Lavender</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$160.8</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <figure class="hot"><a href="#"><img src="img/holiday-3.jpg" class="img-responsive" alt="holiwood"></a></figure>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Fun & Flirty By BloomNation</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$200.7</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <a href="#"><img src="img/wedding-1.jpg" class="img-responsive" alt="holiwood"></a>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Bouquet Rose</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$350.4</div>
                                </div>
                            </div>
                            <!-- ------------------------------------------------ -->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <a href="#"><img src="img/collec-3.jpg" class="img-responsive" alt="holiwood"></a>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Elegant by BloomNation</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                    <div class="prince">$300.2<s class="strike">$250.9</s></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <figure class="hot"><a href="#"><img src="img/wedding-1.jpg" class="img-responsive" alt="holiwood"></a></figure>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Tulipa Floriade - Red</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$160.8</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <a href="#"><img src="img/holiday-1.jpg" class="img-responsive" alt="holiwood"></a>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Winter White Bouquet</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$200.7</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                <div class="product-image-category">
                                    <figure class="hot"><a href="#"><img src="img/cate-1.jpg" class="img-responsive" alt="holiwood"></a></figure>
                                    <div class="product-icon-category">
                                        <a href="#"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-title-category">
                                    <h5><a href="#">Rose - Red</a></h5>
                                    <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    <div class="prince">$350.4</div>
                                </div>
                            </div>
                        </div>
                        <!-- -------------------------end tab other--------------------- -->
                    </div><!-- end tab content -->

                </div><!-- end row -->

            </div>
        </div>
        <!-- ------------------------- -->
        <div class="deal-day count">
            <h1>Deal of the day</h1>
            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum<br class="hidden-xs"> passages and more recently with desktop publishing software</p>
            <div id="countdown">
                <div id='tiles'></div>
                <ul class="labels">
                    <li>Days</li>
                    <li>Hours</li>
                    <li>Mins</li>
                    <li>Secs</li>
                </ul>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="product-slick slider">
                    <div class="product-slic">
                        <div class="product-image-slic">
                            <a href="#"><img src="img/wedding-2.jpg" class="img-responsive" alt="holiwood"></a>
                            <div class="product-icon-slic">
                                <a href="#"><i class="far fa-eye"></i></a>
                                <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-title-slic">
                            <h5><a href="#">Bouquet Lavender</a></h5>
                            <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <div class="prince">$160.8</div>
                        </div>
                    </div>
                    <div class="product-slic">
                        <div class="product-image-slic">
                            <figure class="hot"><a href="#"><img src="img/holiday-1.jpg" class="img-responsive" alt="holiwood"></a></figure>
                            <div class="product-icon-slic">
                                <a href="#"><i class="far fa-eye"></i></a>
                                <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-title-slic">
                            <h5><a href="#">Fun & Flirty By BloomNation</a></h5>
                            <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                            <div class="prince">$200.7</div>
                        </div>
                    </div>
                    <div class="product-slic">
                        <div class="product-image-slic">
                            <a href="#"><img src="img/wedding-4.jpg" class="img-responsive" alt="holiwood"></a>
                            <div class="product-icon-slic">
                                <a href="#"><i class="far fa-eye"></i></a>
                                <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-title-slic">
                            <h5><a href="#">Bouquet Rose</a></h5>
                            <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <div class="prince">$350.4</div>
                        </div>
                    </div>
                    <div class="product-slic">
                        <div class="product-image-slic">
                            <figure class="hot"><a href="#"><img src="img/holiday-1.jpg" class="img-responsive" alt="holiwood"></a></figure>
                            <div class="product-icon-slic">
                                <a href="#"><i class="far fa-eye"></i></a>
                                <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-title-slic">
                            <h5><a href="#">Fun & Flirty By BloomNation</a></h5>
                            <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>
                            <div class="prince">$200.7</div>
                        </div>
                    </div>
                    <div class="product-slic">
                        <div class="product-image-slic">
                            <a href="#"><img src="img/wedding-2.jpg" class="img-responsive" alt="holiwood"></a>
                            <div class="product-icon-slic">
                                <a href="#"><i class="far fa-eye"></i></a>
                                <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-title-slic">
                            <h5><a href="#">Bouquet Lavender</a></h5>
                            <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <div class="prince">$160.8</div>
                        </div>
                    </div>
                    <div class="product-slic">
                        <div class="product-image-slic">
                            <a href="#"><img src="img/wedding-3.jpg" class="img-responsive" alt="holiwood"></a>
                            <div class="product-icon-slic">
                                <a href="#"><i class="far fa-eye"></i></a>
                                <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-title-slic">
                            <h5><a href="#">Bouquet Lavender</a></h5>
                            <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <div class="prince">$160.8</div>
                        </div>
                    </div>
                    <div class="product-slic">
                        <div class="product-image-slic">
                            <a href="#"><img src="img/holiday-2.jpg" class="img-responsive" alt="holiwood"></a>
                            <div class="product-icon-slic">
                                <a href="#"><i class="far fa-eye"></i></a>
                                <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-title-slic">
                            <h5><a href="#">Bouquet Lavender</a></h5>
                            <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <div class="prince">$160.8</div>
                        </div>
                    </div>
                    <div class="product-slic">
                        <div class="product-image-slic">
                            <a href="#"><img src="img/wedding-1.jpg" class="img-responsive" alt="holiwood"></a>
                            <div class="product-icon-slic">
                                <a href="#"><i class="far fa-eye"></i></a>
                                <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                <a href="#"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-title-slic">
                            <h5><a href="#">Bouquet Lavender</a></h5>
                            <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <div class="prince">$160.8</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="blog">
            <h1>Latest Blogs</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 product-blog">
                        <h2><a href="#">Choose for yourself the Flobal<br class="hidden-sm hidden-xs hidden-md"> chiffon dress</a></h2>
                        <a href="#"><img src="img/blog-1.jpg" class="img-responsive" title="img-blog" alt="holiwood"></a>
                        <div class="time-blog">
                            <span class="time"><i class="far fa-calendar-alt"></i><span>May, 12 2018</span></span>
                            <span class="time"><i class="far fa-edit"></i><span>Pixel-Creative</span></span>
                        </div>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 product-blog">
                        <h2><a href="#">Choose for yourself the Flobal<br class="hidden-sm hidden-xs hidden-md"> chiffon dress</a></h2>
                        <a href="#"><img src="img/blog-2.jpg" class="img-responsive" title="img-blog" alt="holiwood"></a>
                        <div class="time-blog">
                            <span class="time"><i class="far fa-calendar-alt"></i><span>May, 12 2018</span></span>
                            <span class="time"><i class="far fa-edit"></i><span>Pixel-Creative</span></span>
                        </div>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 product-blog">
                        <h2><a href="#">Choose for yourself the Flobal<br class="hidden-sm hidden-xs hidden-md"> chiffon dress</a></h2>
                        <a href="#"><img src="img/blog-3.jpg" class="img-responsive" title="img-blog" alt="holiwood"></a>
                        <div class="time-blog">
                            <span class="time"><i class="far fa-calendar-alt"></i><span>May, 12 2018</span></span>
                            <span class="time"><i class="far fa-edit"></i><span>Pixel-Creative</span></span>
                        </div>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="feedback">
            <div class="container">
                <h1>Customers say</h1>
                <h2>,,</h2>
                <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel1" data-slide-to="1"></li>
                        <li data-target="#myCarousel1" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br class="hidden-sm hidden-xs hidden-md"> when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap<br class="hidden-sm hidden-xs hidden-md"> into electronic typesetting, remaining essentially unchanged</p>
                            <div class="img-customer">
                                <img src="{{ asset('ladun/homepage/pic_asset/testi_user_pic/avatar-feedback.png') }}" alt="holiwood">
                                <h1>Laura Ellie - <span>Customers</span></h1>
                            </div>
                        </div>

                        <div class="item">

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br class="hidden-sm hidden-xs hidden-md"> when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap<br class="hidden-sm hidden-xs hidden-md"> into electronic typesetting, remaining essentially unchanged</p>
                            <div class="img-customer">
                                <img src="{{ asset('ladun/homepage/pic_asset/testi_user_pic/avatar-feedback.png') }}" alt="holiwood">
                                <h1>Laura Ellie - <span>Customers</span></h1>
                            </div>
                        </div>

                        <div class="item">

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br class="hidden-sm hidden-xs hidden-md"> when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap<br class="hidden-sm hidden-xs hidden-md"> into electronic typesetting, remaining essentially unchanged</p>
                            <div class="img-customer">
                                <img src="{{ asset('ladun/homepage/pic_asset/testi_user_pic/avatar-feedback.png') }}" alt="holiwood">
                                <h1>Laura Ellie - <span>Customers</span></h1>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="img-link">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 colum-img">
                        <a href="#"><img src="img/img-link-insta1.jpg" class="img-responsive" alt="holiwood"></a>
                        <a href="#" class="img-insta"><i class="fab fa-instagram"></i>
                            <h1>Instagram</h1>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 colum-img">
                        <a href="#"><img src="img/img-link-insta2.jpg" class="img-responsive" alt="holiwood"></a>
                        <a href="#" class="img-insta"><i class="fab fa-instagram"></i>
                            <h1>Instagram</h1>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 colum-img">
                        <a href="#"><img src="img/img-link-insta3.jpg" class="img-responsive" alt="holiwood"></a>
                        <a href="#" class="img-insta"><i class="fab fa-instagram"></i>
                            <h1>Instagram</h1>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 colum-img">
                        <a href="#"><img src="img/img-link-insta4.jpg" class="img-responsive" alt="holiwood"></a>
                        <a href="#" class="img-insta"><i class="fab fa-instagram"></i>
                            <h1>Instagram</h1>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 colum-img">
                        <a href="#"><img src="img/img-link-insta5.jpg" class="img-responsive" alt="holiwood"></a>
                        <a href="#" class="img-insta"><i class="fab fa-instagram"></i>
                            <h1>Instagram</h1>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 colum-img">
                        <a href="#"><img src="img/img-link-insta6.jpg" class="img-responsive" alt="holiwood"></a>
                        <a href="#" class="img-insta"><i class="fab fa-instagram"></i>
                            <h1>Instagram</h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="info-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <h3>About</h3>
                            <ul>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">News & Stories</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">History</a> </li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Our Studio</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Shop</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Stockists</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <h3>Customer sevices</h3>
                            <ul>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Contact Us</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Trade Services</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Login/Register</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Delivery & Returns</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <h3>Store</h3>
                            <ul>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Shop</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Wedding</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Birthday</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Women's day</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <h3>Shop collection</h3>
                            <ul>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">New Arrivals</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Hot</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Sale</a></li>
                                <li><i class="fas fa-long-arrow-alt-right"></i><a href="#">Deal of the day</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 social">
                        <p>CONNECT WITH US:</p>
                        <a href="#" id="link-insta"></a>
                        <a href="#" id="link-fb"></a>
                        <a href="#" id="link-tw"></a>
                        <a href="#" id="link-sky"></a>
                        <h1>Newsletter</h1>
                        <h2>Sign up for our mailing list to get latest updates and offers</h2>
                        <form class="form-group" action="mail" method="post">
                            <input type="text" name="input-mail" placeholder="Your mail here" class="input-lg">
                            <button type="submit"><img src="{{ asset('ladun/homepage/pic_asset/util/Send.png') }}" alt="holiwood"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 logo-footer">
                    <a href="#" class="logo-bot"></a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 copy">
                    <span>Copyright</span><i class="far fa-copyright"></i><span class="engo">2020 PT Ebunga Sukses Makmur</span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gmail-footer">
                    <span id="gmail-footer"><a href="#">hi@ebunga.co.id</a></span>
                </div>
            </div>
        </div>
        <div class="hidden-lg hidden-md back-to-top fade"><i class="fas fa-caret-up"></i></div>
        <div class="BG-menu"></div>
    </footer>

    <!-- boostrap & jquery -->
    <script src="{{ asset('ladun/homepage/js_asset/jquery.min_af.js') }}"></script>
    <script src="{{ asset('ladun/homepage/js_asset/bootstrap.min_0028.js') }}"></script>
    <script src="{{ asset('ladun/homepage/js_asset/slick.js') }}"></script>
    <!-- js file -->
    <script src="{{ asset('ladun/homepage/js_asset/function-time-counter.js') }}"></script>
    <script src="{{ asset('ladun/homepage/js_asset/function-slick.js') }}"></script>
    <script src="{{ asset('ladun/homepage/js_asset/function-input-number.js') }}"></script>
    <script src="{{ asset('ladun/homepage/js_asset/function-select-custom.js') }}"></script>
    <script src="{{ asset('ladun/homepage/js_asset/function-back-top.js') }}"></script>
    <script src="{{ asset('ladun/homepage/js_asset/function-sidebar.js') }}"></script>
    <script src="{{ asset('ladun/homepage/js_asset/funtion-header-v3.js') }}"></script>
    <script src="{{ asset('ladun/homepage/js_asset/function-search-v2.js') }}"></script>

</body>

</html>