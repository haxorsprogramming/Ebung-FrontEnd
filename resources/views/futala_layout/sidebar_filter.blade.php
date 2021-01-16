<div class="col-lg-3 order-lg-1 order-2">
    <!-- shop-sidebar-wrap start -->
    <div class="shop-sidebar-wrap">


        <!-- shop-sidebar start -->
        <div class="shop-sidebar mb-30">
            <h4 class="title">CATEGORIES</h4>
            <ul>
              @foreach($kategori as $kat)
                <li><a href="#!">{{ $kat -> nama_kategori }} <span>(18)</span></a></li>
              @endforeach
            </ul>
        </div>
        <!-- shop-sidebar end -->


        <!-- shop-sidebar start -->
        <div class="sidbar-product shop-sidebar mb-30">
            <h4 class="title">best product</h4>
            <!-- sidbar-product-inner start -->
            <div class="sidbar-product-inner">
                <div class="product-image">
                    <a href="product-details.html"><img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/product/main-product/EBUNGA4280.jpg" alt=""></a>
                </div>
                <div class="product-content text-left">
                    <h3><a href="product-details.html">Products Name 003</a></h3>
                    <div class="price-box">
                        <span class="old-price">11.00</span>
                        <span class="new-price">10.00</span>
                    </div>
                </div>
            </div>
            <!-- sidbar-product-inner end -->
            <!-- sidbar-product-inner start -->
            <div class="sidbar-product-inner">
                <div class="product-image">
                    <a href="product-details.html"><img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/product/main-product/EBUNGA4280.jpg" alt=""></a>
                </div>
                <div class="product-content text-left">
                    <h3><a href="product-details.html">Products Name 011</a></h3>
                    <div class="price-box">
                        <span class="old-price">18.00</span>
                        <span class="new-price">14.00</span>
                    </div>
                </div>
            </div>
            <!-- sidbar-product-inner end -->
            <!-- sidbar-product-inner start -->
            <div class="sidbar-product-inner">
                <div class="product-image">
                    <a href="product-details.html"><img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/product/main-product/EBUNGA4280.jpg" alt=""></a>
                </div>
                <div class="product-content text-left">
                    <h3><a href="product-details.html">Products Name 008</a></h3>
                    <div class="price-box">

                        <span class="old-price">19.00</span>
                        <span class="new-price">16.00</span>
                    </div>
                </div>
            </div>
            <!-- sidbar-product-inner end -->
        </div>
        <!-- shop-sidebar end -->



        <!-- shop-sidebar start -->
        <div class="shop-sidebar">
            <h4 class="title">Hot Tags</h4>
            <div class="sidebar-tag">
                <a href="#">Red</a>
                <a href="#">Blue</a>
                <a href="#">Man</a>
                <a href="#">White</a>
                <a href="#">Yellow</a>
                <a href="#">Digital</a>
                <a href="#">Women</a>
                <a href="#">Evergreen</a>
            </div>
        </div>
        <!-- shop-sidebar end -->
    </div>
    <!-- shop-sidebar-wrap end -->
</div>
