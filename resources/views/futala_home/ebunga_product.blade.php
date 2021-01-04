<!-- Start Product Area -->
<div class="porduct-area section-pb" id="divProduct">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title text-center">
                    <h2><span>Ebunga</span> Product</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                </div>
            </div>
        </div>
        <div class="text-center pt-1 pb-1">
            <a href="javascript:void(0)" class="btn btn-outline-primary btn-round active-btn" style="margin-right: 10px;">
                <img src="{{ asset('ladun/ebunga_asset/image/front/rose-outline.svg') }}" style="width: 30px;"> Bunga
            </a>
            <a href="javascript:void(0)" class="btn btn-outline-primary btn-round" style="margin-right: 10px;">
                <img src="{{ asset('ladun/ebunga_asset/image/front/easel-outline.svg') }}" style="width: 30px;"> Papan Bunga
            </a>
            <a href="javascript:void(0)" class="btn btn-outline-primary btn-round" style="margin-right: 10px;">
                <img src="{{ asset('ladun/ebunga_asset/image/front/gift-outline.svg') }}" style="width: 30px;"> Parcel
            </a>
            <a href="javascript:void(0)" class="btn btn-outline-primary btn-round" style="margin-right: 10px;">
                <img src="{{ asset('ladun/ebunga_asset/image/front/storefront-outline.svg') }}" style="width: 30px;"> Cake
            </a>
        </div>

        <div class="row product-two-row-4">
            @php 
            $subKategori = DB::table('tbl_sub_kategori') -> where('kd_kategori', 'BUNGA') -> get();
            @endphp
            @foreach($subKategori as $subKategori)

            <div class="col-lg-12">
                <!-- single-product-wrap start -->
                <div class="single-product-wrap">
                    <div class="product-image">
                        <a href="#!">
                            <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/sub-kategory-pic/{{ $subKategori -> kd_sub_kategori }}.jpeg" alt="Produce Images"></a>
                        <span class="label">30% Off</span>
                        <div class="product-action">
                            <a href="#" class="add-to-cart"><i class="ion-bag"></i></a>
                            <a href="#" class="wishlist"><i class="ion-android-favorite-outline"></i></a>
                            <a href="#" class="quick-view" data-toggle="modal" data-target="#exampleModalCenter"><i class="ion-ios-search"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="product-details.html">{{ $subKategori -> nama_kategori }}</a></h3>
                        <div class="price-box">
                            <span class="new-price" style="color:#1e272e;">200 Total product</span>
                        </div>
                    </div>
                </div>
                <!-- single-product-wrap end -->
            </div>
            @endforeach
        </div>

    </div>
</div>
<!-- Start Product End -->
