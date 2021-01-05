@include('futala_layout.header')

<!-- breadcrumb-area start -->
<div class="breadcrumb-area section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="breadcrumb-title">Product Details</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Product</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->


<!-- main-content-wrap start -->
<div class="main-content-wrap section-ptb product-details-page">
    <div class="container">
        <div class="row" id="divProduct">
            <div class="col-xl-6 col-lg-7 col-md-6">
                <div class="product-details-images">
                    <div class="product_details_container">
                        <!-- product_big_images start -->
                        <div class="product_big_images-right">
                            <div class="portfolio-full-image tab-content">
                                <div role="tabpanel" class="tab-pane active product-image-position" id="img-tab-5">
                                    <a href="https://s3-id-jkt-1.kilatstorage.id/ebunga/product/main-product/EBUNGA9119.jpg" class="img-poppu">
                                        <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/product/main-product/{{ $dataProduct -> foto_utama }}" alt="#">
                                    </a>
                                </div>
                                <div role="tabpanel" class="tab-pane product-image-position" id="img-tab-6">
                                    <a href="https://s3-id-jkt-1.kilatstorage.id/ebunga/product/main-product/EBUNGA9119.jpg" class="img-poppu">
                                        <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/product/main-product/EBUNGA9119.jpg" alt="#">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- product_big_images end -->

                        <!-- Start Small images -->
                        <ul class="product_small_images-left vartical-product-active nav" role="tablist">
                            <li role="presentation" class="pot-small-img active">
                                <a href="#img-tab-5" role="tab" data-toggle="tab">
                                    <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/product/main-product/EBUNGA9119.jpg" alt="#">
                                </a>
                            </li>
                            <li role="presentation" class="pot-small-img">
                                <a href="#img-tab-6" role="tab" data-toggle="tab">
                                    <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/product/main-product/EBUNGA9119.jpg" alt="#">
                                </a>
                            </li>
                        </ul>
                        <!-- End Small images -->
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-6">
                <!-- product_details_info start -->
                <div class="product_details_info">
                    <h2>{{ $dataProduct -> nama_produk }}</h2>
                    <!-- pro_rating start -->
                    <div class="pro_rating d-flex">
                        <ul class="product-rating d-flex">
                            <li><span class="ion-android-star-outline"></span></li>
                            <li><span class="ion-android-star-outline"></span></li>
                            <li><span class="ion-android-star-outline"></span></li>
                            <li><span class="ion-android-star-outline"></span></li>
                            <li><span class="ion-android-star-outline"></span></li>
                        </ul>
                        <!-- <span class="rat_qun"> (Based on 0 Ratings) </span> -->
                    </div>
                    <!-- pro_rating end -->
                    <!-- pro_details start -->
                    <!-- pro_details end -->
                    <!-- pro_dtl_prize start -->
                    <hr />
                    <div class="form-group">
                        <label>Price</label>
                        <h5>Rp. {{ number_format($dataProduct -> harga) }}</h5>
                    </div>
                    
                    <!-- pro_dtl_prize end -->
                    <!-- pro_dtl_color start-->
                    <hr/>
                    <div class="form-group">
                        <label>Choose Variant</label>
                        <select class="form-control" style="width: 200px;">
                            <option value="main">Main variant</option>
                        </select>
                    </div>
                    <!-- pro_dtl_color end-->
                    <!-- product-quantity-action start -->
                    <div class="form-group">
                        <div class="prodict-statas"><label>Quantity :</label></div>
                        <div class="product-quantity">
                            <div class="product-quantity">
                                <div class="cart-plus-minus">
                                    <input type="number" value="1" class="form-control" style="width: 80px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product-quantity-action end -->
                    <!-- pro_dtl_btn start -->
                    <ul class="pro_dtl_btn">
                        <li><a href="#!" id="btnBuyNow" class="buy_now_btn" @click="buyNowAtc">BUY NOW</a></li>
                        <li><a href="#!"><i class="ion-heart"></i></a></li>
                    </ul>
                    <!-- pro_dtl_btn end -->
                    <!-- pro_social_share start -->
                    <div class="pro_social_share d-flex">
                        <label>Share :</label>
                        <ul class="pro_social_link">
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <!-- pro_social_share end -->
                </div>
                <!-- product_details_info end -->
            </div>
        </div>

        


    </div>
</div>
<!-- main-content-wrap end -->


@include('futala_layout.footer')