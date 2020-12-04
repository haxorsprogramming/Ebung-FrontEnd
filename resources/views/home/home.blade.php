@include('layout.header_home')

    <main>
        <div class="content-search">

            <div class="container container-100">
                <i class="far fa-times-circle" id="close-search"></i>
                <h3 class="text-center">What are your looking for ?</h3>
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
                        <img src="{{ asset('ladun/homepage/pic_asset/slide_show/slider_1.jpg') }}" alt="holiwood">
                        <div class="carousel-caption" >
                            <h3>IT'S YOUR DAY !</h3>
                            <h1 style="color:#353b48;">Happy<br>Birthday.</h1>
                            <a href="#">Shop Now!</a>
                        </div>
                    </div>

                    <div class="item slide2">
                        <img src="{{ asset('ladun/homepage/pic_asset/slide_show/slider_2.jpg') }}" alt="holiwood">
                        <div class="carousel-caption">
                            <h1>New<br>Collections</h1>
                            <a href="#">Shop now</a>
                        </div>
                    </div>

                    <div class="item slide1">
                        <img src="{{ asset('ladun/homepage/pic_asset/slide_show/slider_3.jpg') }}" alt="holiwood">
                        <div class="carousel-caption">
                            <h3>IT'S YOUR DAY !</h3>
                            <h1>Happy<br>Birthday.</h1>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                    <div class="item slide2">
                        <img src="{{ asset('ladun/homepage/pic_asset/slide_show/slider_1.jpg') }}" alt="holiwood">
                        <div class="carousel-caption">
                            <h1>New<br>Collections</h1>
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
                                            <img src="http://landing.engotheme.com/html/jenstore/demo/img/queen.jpg" class="img-responsive" alt="holiwood">
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
                                            <img src="http://landing.engotheme.com/html/jenstore/demo/img/queen.jpg" class="img-responsive" alt="holiwood">
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
                                            <img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood">
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
                                <li class="active col-lg-4 col-md-4 col-sm-4 col-xs-12"><a data-toggle="pill" href="http://landing.engotheme.com/html/jenstore/demo/img/wedding-1.jpg"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a></li>
                                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a data-toggle="pill" href="http://landing.engotheme.com/html/jenstore/demo/img/wedding-1.jpg"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a></li>
                                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a data-toggle="pill" href="http://landing.engotheme.com/html/jenstore/demo/img/wedding-1.jpg"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a></li>
                                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a data-toggle="pill" href="http://landing.engotheme.com/html/jenstore/demo/img/wedding-1.jpg"><img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood"></a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
            <!-- --------------------------- -->
            <div class="container" >
                <h1>Product of EBunga</h1>
                <div>
                <ul class="nav nav-tabs menu-category">
                    <?php  
                        $icon_kategori = array('local_florist','event_note', 'card_giftcard', 'cake', );
                        $no = 0;
                    ?>
                    @foreach($kategori as $kat)
                    <li class="{{$kat -> kd_kategori}}-menu" >
                        <a data-toggle="tab" href="#menu-tab-{{$kat -> kd_kategori}}">
                            <span class="material-icons">{{ $icon_kategori[$no] }}</span> <h5>{{$kat -> nama_kategori}}</h5>
                        </a>
                        <figure id="shop-2" class="hidden-xs"></figure>
                    </li>
                    <?php $no++; ?>
                    @endforeach
                    <li class="all-menu">
                        <a data-toggle="tab" href="#menu-tab-all">
                            <span class="material-icons">apps</span> <h5>All</h5>
                        </a>
                        <figure id="shop-2" class="hidden-xs"></figure>
                    </li>
                </ul>
                </div>
                
                <div class="row">
                    <div class="tab-content">
                        <?php
                            $produk_bunga = DB::table('tbl_produk') -> where('kategori', 'BUNGA') -> get();
                            $produk_papan_bunga = DB::table('tbl_produk') -> where('kategori', 'PAPANBUNGA') -> get();
                            $produk_parcel = DB::table('tbl_produk') -> where('kategori', 'PARCEL') -> get();
                            $produk_cake = DB::table('tbl_produk') -> where('kategori', 'CAKE') -> get();
                        ?>
                        <!-- ------tab bunga---------------- -->
                        <div id="menu-tab-BUNGA" class="tab-pane fade in active">

                            @foreach($produk_bunga as $prod)
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                    <div class="product-image-category">
                                        <figure class="sale"><a href="#"><img src="{{ asset('ladun/ebunga_asset/image/product/'.$prod -> foto_utama) }}" class="img-responsive" alt="holiwood"></a></figure>
                                        <div class="product-icon-category">
                                            <a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>

                                            <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                            <a href="#"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-title-category">
                                        <h5><a href="#">{{ $prod -> nama_produk }} - Pink</a></h5>
                                        <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                        <div class="prince">Rp. {{ number_format($prod -> harga) }}<s class="strike">$250.9</s></div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- ------------------------------------------------ -->
                        </div>
                        <!-- ------------end tab bunga ------>

                        <!-- ------tab papan bunga---------------- -->
                        <div id="menu-tab-PAPANBUNGA" class="tab-pane">
                        @foreach($produk_papan_bunga as $prod)
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                                    <div class="product-image-category">
                                        <figure class="sale"><a href="#"><img src="{{ asset('ladun/ebunga_asset/image/product/'.$prod -> foto_utama) }}" class="img-responsive" alt="holiwood"></a></figure>
                                        <div class="product-icon-category">
                                            <a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-eye"></i></a>

                                            <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                            <a href="#"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-title-category">
                                        <h5><a href="#">{{ $prod -> nama_produk }} - Pink</a></h5>
                                        <div class="star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                        <div class="prince">Rp. {{ number_format($prod -> harga) }}<s class="strike">$250.9</s></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                         <!-- ------------end tab papan bunga ------>
                    </div><!-- end tab content -->

                </div><!-- end row -->

            </div>
        </div>
        

        <!-- Promo of the week  -->
        @include('home.promo_of_the_week');
        

        <div class="blog">
            <h1>Latest Blogs</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 product-blog">
                        <h2><a href="#">Choose for yourself the Flobal<br class="hidden-sm hidden-xs hidden-md"> chiffon dress</a></h2>
                        <a href="#"><img src="http://landing.engotheme.com/html/jenstore/demo/img/blog-1.jpg" class="img-responsive" title="img-blog" alt="holiwood"></a>
                        <div class="time-blog">
                            <span class="time"><i class="far fa-calendar-alt"></i><span>May, 12 2018</span></span>
                            <span class="time"><i class="far fa-edit"></i><span>Pixel-Creative</span></span>
                        </div>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 product-blog">
                        <h2><a href="#">Choose for yourself the Flobal<br class="hidden-sm hidden-xs hidden-md"> chiffon dress</a></h2>
                        <a href="#"><img src="http://landing.engotheme.com/html/jenstore/demo/img/blog-1.jpg" class="img-responsive" title="img-blog" alt="holiwood"></a>
                        <div class="time-blog">
                            <span class="time"><i class="far fa-calendar-alt"></i><span>May, 12 2018</span></span>
                            <span class="time"><i class="far fa-edit"></i><span>Pixel-Creative</span></span>
                        </div>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 product-blog">
                        <h2><a href="#">Choose for yourself the Flobal<br class="hidden-sm hidden-xs hidden-md"> chiffon dress</a></h2>
                        <a href="#"><img src="http://landing.engotheme.com/html/jenstore/demo/img/blog-1.jpg" class="img-responsive" title="img-blog" alt="holiwood"></a>
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
                        <a href="#"><img src="http://landing.engotheme.com/html/jenstore/demo/img/img-link-insta1.jpg" class="img-responsive" alt="holiwood"></a>
                        <a href="#" class="img-insta"><i class="fab fa-instagram"></i>
                            <h1>Instagram</h1>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 colum-img">
                        <a href="#"><img src="http://landing.engotheme.com/html/jenstore/demo/img/img-link-insta1.jpg" class="img-responsive" alt="holiwood"></a>
                        <a href="#" class="img-insta"><i class="fab fa-instagram"></i>
                            <h1>Instagram</h1>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 colum-img">
                        <a href="#"><img src="http://landing.engotheme.com/html/jenstore/demo/img/img-link-insta1.jpg" class="img-responsive" alt="holiwood"></a>
                        <a href="#" class="img-insta"><i class="fab fa-instagram"></i>
                            <h1>Instagram</h1>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 colum-img">
                        <a href="#"><img src="http://landing.engotheme.com/html/jenstore/demo/img/img-link-insta1.jpg" class="img-responsive" alt="holiwood"></a>
                        <a href="#" class="img-insta"><i class="fab fa-instagram"></i>
                            <h1>Instagram</h1>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 colum-img">
                        <a href="#"><img src="http://landing.engotheme.com/html/jenstore/demo/img/img-link-insta1.jpg" class="img-responsive" alt="holiwood"></a>
                        <a href="#" class="img-insta"><i class="fab fa-instagram"></i>
                            <h1>Instagram</h1>
                        </a>
                    </div>

                </div>
            </div>
        </div>

@include('layout.footer_home')