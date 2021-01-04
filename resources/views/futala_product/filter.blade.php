@include('futala_layout.header')

<!-- breadcrumb-area start -->
<div class="breadcrumb-area section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="breadcrumb-title">Shop Left Sidebar</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                        <label>Untuk memudahkan pencarian, masukkan daerah tujuan pengiriman</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="txtCoverageArea" placeholder="" aria-label="">
                            <div class="input-group-append">
                                <a href="#!" class="btn btn-lg btn-icon" style="border:1px #d2dae2 solid;"><i class="ion-ios-search"></i></a>
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

                    <!-- shop-products-wrap start -->
                    <div class="shop-products-wrap">
                        <div class="tab-content">
                            <div class="tab-pane active" id="grid">
                                <div class="shop-product-wrap">
                                    <div class="row">
                                        @foreach($dataProduct as $product)
                                        @php 
                                            $kdBranch = $product -> id_branch;
                                            $dataBranch = DB::table('tbl_branch_seller') -> where('kd_branch', $kdBranch) -> first();
                                            $alamat = $dataBranch -> alamat;
                                            $exAlamat = explode("-", $alamat);
                                            $idKab = $exAlamat[2];
                                            $dataKabupaten = DB::table('tbl_kabupaten') -> where('id_kab', $idKab) -> first();
                                            $namaKabupaten = $dataKabupaten -> nama;
                                        @endphp
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product-details.html">
                                                        <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/product/main-product/{{ $product -> foto_utama }}" alt="{{ $product -> nama_produk }}">
                                                    </a>
                                                    <span class="label">{{ $namaKabupaten }}</span>
                                                    <div class="product-action">
                                                        <a href="#" class="add-to-cart"><i class="ion-bag"></i></a>
                                                        <a href="#" class="wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                        <a href="#" class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-ios-search"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h3><a href="#!">{{ $product -> nama_produk }}</a></h3>
                                                    <div class="price-box">
                                                        <span>Rp. {{ number_format($product -> harga) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>
                                        @endforeach                                     

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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis pariatur ipsa sint consectetur velit maiores sit voluptates aut tempora totam, consequatur iste quod suscipit natus. Explicabo facere neque adipisci odio.</p>
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
                                    <li><a class="Previous" href="#"><i class="ion-chevron-left"></i></a>
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


@include('futala_layout.footer')