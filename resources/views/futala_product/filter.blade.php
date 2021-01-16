@include('futala_layout.header')

<!-- breadcrumb-area start -->
<div class="breadcrumb-area section-ptb" style="background-image:url('https://s3-id-jkt-1.kilatstorage.id/ebunga/cover/cover-bunga.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="breadcrumb-title" style="color: #ecf0f1;">Bunga</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Shop left sidebar</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<!-- main-content-wrap start -->
<div class="main-content-wrap shop-page section-ptb">
    <div class="container">
        <div class="row">

            @include('futala_layout.sidebar_filter')

            <div class="col-lg-9 order-lg-2 order-1">
                <!-- shop-product-wrapper start -->
                <div class="shop-product-wrapper">
                    <div class="form-group">
                        <label style="font-size: 20px;">Untuk memudahkan pencarian, masukkan daerah tujuan pengiriman</label>
                        <div class="input-group mb-3">
                        <select class="form-control" id="txtDaerah">
                        </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Provinsi</label>
                                <select class="form-control">
                                    <option>List provinsi</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                        <div class="form-group">
                                <label>Kabupaten</label>
                                <select class="form-control">
                                    <option>List kabupaten</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                        <div class="form-group">
                                <label>Kecamatan</label>
                                <select class="form-control">
                                    <option>List kecamatan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <!-- shop-top-bar start -->
                            <div class="shop-top-bar">
                                <!-- product-view-mode start -->

                                <div class="product-mode">
                                    <!--shop-item-filter-list-->
                                    <ul class="nav shop-item-filter-list" role="tablist">
                                        <li class="active"><a class="active" data-toggle="tab" href="#grid"><i class="ion-ios-keypad-outline"></i></a></li>
                                        <li><a data-toggle="tab" href="#list"><i class="ion-ios-list-outline"></i></a></li>
                                    </ul>
                                    <!-- shop-item-filter-list end -->
                                </div>
                                <!-- product-view-mode end -->
                                <!-- product-short start -->
                                <div class="product-short">
                                    <select class="nice-select" name="sortby">
                                        <option value="trending">Relevance</option>
                                        <option value="sales">Name(A - Z)</option>
                                        <option value="sales">Name(Z - A)</option>
                                        <option value="rating">Price(Low > High)</option>
                                        <option value="date">Rating(Lowest)</option>
                                    </select>
                                </div>
                                <!-- product-short end -->
                            </div>
                            <!-- shop-top-bar end -->
                        </div>
                    </div>

                    <div id="divLoading" style="text-align:center;">
                            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_jryyrscd.json" mode="bounce" background="transparent" speed="1" style="width: 300px; height: 300px;margin:auto;" loop autoplay></lottie-player>
                            <h5>Loading product ... </h5>
                    </div>

                    <div id="divNoProduct" style="text-align:center;display:none;">
                      <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/ebunga-cdn/img-utility/no_product.jpg" style="width:700px;">
                    </div>

                    <!-- shop-products-wrap start -->
                    <div class="shop-products-wrap" id="divListProduk" style="display: none;">
                    <div class="tab-content">
                            <div class="tab-pane active" id="grid">
                                <div class="shop-product-wrap">
                                    <div class="row">

                                        <div v-for="prod in produk" class="col-lg-4 col-md-4 col-sm-6">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a v-bind:href="'{{ url('/product/') }}/'+prod.slug">
                                                        <img v-bind:src="'https://s3-id-jkt-1.kilatstorage.id/ebunga/product/main-product/'+prod.foto" alt="">
                                                    </a>
                                                    <span class="label">@{{ prod.kabupaten }}</span>
                                                    <div class="product-action">
                                                        <a href="#" class="add-to-cart"><i class="ion-bag"></i></a>
                                                        <a href="#" class="wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-ios-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="#!">@{{ prod.nama }}</a></h3>
                                                    <div class="price-box">
                                                        <span>@{{ Number(prod.harga).toLocaleString() }} </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="list">
                                <div class="shop-product-list-wrap">
                                    @foreach($dataProduct as $product)
                                    <div class="row product-layout-list">
                                        <div class="col-lg-4 col-md-5">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-details.html"><img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/product/main-product/EBUNGA4280.jpg" alt="Produce Images"></a>
                                                    <span class="label">30% Off</span>
                                                    <div class="product-action">
                                                        <a href="#" class="add-to-cart"><i class="ion-bag"></i></a>
                                                        <a href="#" class="wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-ios-search"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="product-content text-left">
                                                <h3><a href="product-details.html">{{ $product -> nama_produk }}</a></h3>
                                                <div class="price-box">
                                                    <span class="old-price">$56</span>
                                                    <span class="new-price">$45</span>
                                                </div>
                                                <p><?=$product -> deks_produk; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop-products-wrap end -->

                    <!-- paginatoin-area start -->
                    <div class="paginatoin-area">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <ul class="pagination-box">
                                    <li>
                                        <a class="Previous" href="#"><i class="ion-chevron-left"></i></a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li>
                                        <a class="Next" href="#"><i class="ion-chevron-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- paginatoin-area end -->
                </div>
                <!-- shop-product-wrapper end -->
            </div>
        </div>
    </div>
</div>
<!-- main-content-wrap end -->

<script>
    var kategori = "{{ $subKategori }}";
</script>

@include('futala_layout.footer')
