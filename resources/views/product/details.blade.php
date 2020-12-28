@php
$kdProduk = $dataProduct -> kd_produk;
$dataVariant = DB::table('tbl_variant_product') -> where('kd_product', $kdProduk) -> get();
$idBranch = $dataProduct -> id_branch;
$coverageArea = DB::table('tbl_coverage_area') -> where('kd_branch', $idBranch) -> get();
$coverageCaps = "";
foreach($coverageArea as $cov){
    $kdArea = $cov -> kd_area;
    $dataKelurahan = DB::table('tbl_kelurahan') -> where('id_kel', $kdArea) -> first();
    $namaKelurahan = $dataKelurahan -> nama;
    $coverageCaps .= " | ".$namaKelurahan." ";
}
@endphp

@include('layout.header')

<main>

    @include('home.content_search');

    <div class="container">
        <div class="menu-breadcrumb">
            <ul class="breadcrumb">
                <li><a href="#!">Home</a></li>
                <li><a href="#!">{{ $dataProduct -> kategori }}</a></li>
                <li><a href="#!">{{ $dataProduct -> sub_kategori}}</a></li>
                <li><a href="#!">{{ $dataProduct -> nama_produk }}</a></li>
            </ul>
        </div>
    </div>
    <div class="product-detail">

        <div class="container">

            <div class="row">
                <div class="slider-for">

                    <div class="product-content" id="divProduct">
                        <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 img-content">
                            <img id="imgUtama" src="{{ env('EBUNGA_BUCKET') }}product/main-product/{{ $dataProduct -> foto_utama }}" class="img-responsive" alt="img-holiwood">
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 detail">
                            <h1>{{ $dataProduct -> nama_produk }}</h1>
                            <p class="p1" style="text-align: center;"><?=$dataProduct -> deks_produk; ?></p>
                            <div class="star">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                <span>10 Rating(s)</span>
                            </div>
                            <div class="prince"><span>Rp. {{ number_format($dataProduct -> harga) }}</span><s class="strike">$300.02</s></div>
                            <figure class="fi-option">
                                <p class="option">Coverage Area</p>
                            </figure>
                            <div class="detail">
                                <p>{{ $coverageCaps }}</p>
                            </div>
                            <figure class="fi-option">
                                <p class="option">Option</p>
                            </figure>
                            <div class="size col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <span class="lb-size">Variant <span class="sta-red">*</span></span>
                                <div class="select-custom">
                                    <select class="form-control" id="txtVariant">
                                            <option>Main variant</option>
                                        @foreach($dataVariant as $variant)
                                            <option>{{ $variant -> nama_variant }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <p class="require">Required Fields <span>*</span></p>
                            <div class="Quality">

                                <div class="input-group input-number-group">
                                    <span class="text-qua">Quanty:</span>
                                    <div class="input-group-button">
                                        <span class="input-number-decrement" @click="incQtAtc">-</span>
                                    </div>
                                    <input class="input-number" type="number" min="0" max="1000" value="1">
                                    <div class="input-group-button">
                                        <span class="input-number-increment" @click="addQtAtc">+</span>
                                    </div>
                                    <!-- <span class="dola">$ </span><span class="total-prince"></span> -->
                                </div>

                            </div>
                            <div class="add-cart">
                                <a href="#" class="btn-add-cart">Order Now</a>
                                <!-- <a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
                                <a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a> -->
                            </div>

                        </div>
                    </div>
                    <!-- ------ end content 1----- -->

                </div>
                <div class="slider-nav col-lg-5 col-md-6 col-sm-12 col-xs-12" id="divVariantFoto">
                    <div @click="changeVariantAtc('utama', '{{ $kdProduk }}')">
                        <img src="{{ env('EBUNGA_BUCKET') }}product/main-product/{{ $dataProduct -> foto_utama }}" style="width: 100px;" class="img-responsive" alt="img-holiwood">
                    </div>
                    @foreach($dataVariant as $variant)
                    @php
                    $picVariant = $variant -> kd_variant.".jpg";
                    $namaVariant = $kdProduk."_VAR".$variant -> nama_variant.".jpg";
                    @endphp
                    <div @click="changeVariantAtc('{{ $namaVariant }}', '{{ $kdProduk }}')">
                        <img src="{{ env('EBUNGA_BUCKET') }}product/variant/{{ $picVariant }}" class="img-responsive" alt="img-holiwood">
                    </div>
                    @endforeach
                </div>

            </div>

        </div>
        <div class="product-text">
            <div class="container">
                <ul class="nav nav-tabs menu-tab">
                    <li class="active"><a data-toggle="tab" href="#decription">Decription</a>
                        <figure id="fi-decription"></figure>
                    </li>
                    <li><a data-toggle="tab" href="#product-tag">Product Tags</a>
                        <figure id="fi-product-tag"></figure>
                    </li>
                    <li><a data-toggle="tab" href="#write">Write Your Own Review</a>
                        <figure id="fi-write"></figure>
                    </li>
                    <li><a data-toggle="tab" href="#addtional">Additional Information</a>
                        <figure id="fi-addtional"></figure>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="decription" class="tab-pane fade in active">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                            <br><br>
                            Fusce aliquet, ante cursus gravida sagittis, justo erat rhoncus sapien, eget condimentum ligula magna sed est. Suspendisse molestie ligula tortor. Suspendisse vitae orci ac purus eleifend malesuada at vel tellus. Sed ac semper magna. Mauris consequat blandit risus. Cras dictum eros libero, a scelerisque quam laoreet non. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam pharetra euismod felis, a eleifend magna.</p>
                    </div>
                    <div id="product-tag" class="tab-pane fade">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                            <br><br>
                            Fusce aliquet, ante cursus gravida sagittis, justo erat rhoncus sapien, eget condimentum ligula magna sed est. Suspendisse molestie ligula tortor. Suspendisse vitae orci ac purus eleifend malesuada at vel tellus. Sed ac semper magna. Mauris consequat blandit risus. Cras dictum eros libero, a scelerisque quam laoreet non. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam pharetra euismod felis, a eleifend magna.</p>
                    </div>
                    <div id="write" class="tab-pane fade">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                            <br><br>
                            Fusce aliquet, ante cursus gravida sagittis, justo erat rhoncus sapien, eget condimentum ligula magna sed est. Suspendisse molestie ligula tortor. Suspendisse vitae orci ac purus eleifend malesuada at vel tellus. Sed ac semper magna. Mauris consequat blandit risus. Cras dictum eros libero, a scelerisque quam laoreet non. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam pharetra euismod felis, a eleifend magna.</p>
                    </div>
                    <div id="addtional" class="tab-pane fade">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                            <br><br>
                            Fusce aliquet, ante cursus gravida sagittis, justo erat rhoncus sapien, eget condimentum ligula magna sed est. Suspendisse molestie ligula tortor. Suspendisse vitae orci ac purus eleifend malesuada at vel tellus. Sed ac semper magna. Mauris consequat blandit risus. Cras dictum eros libero, a scelerisque quam laoreet non. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam pharetra euismod felis, a eleifend magna.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="related">
            <div class="container">
                <h1>Related Products</h1>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 product-category">
                        <div class="product-image-category">
                            <figure class="sale"><a href="#"><img src="http://landing.engotheme.com/html/jenstore/demo/img/holiday-1.jpg" class="img-responsive" alt="img-holiwood"></a></figure>
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

                </div>
            </div>

        </div>
    </div>



    @include('layout.footer')