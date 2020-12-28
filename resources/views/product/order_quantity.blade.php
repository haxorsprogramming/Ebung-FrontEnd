<div class="container container-ver2">
<div class="box cart-container" id="boxOrderQuantity">
    <table class="table cart-table space-30">
        <thead>
            <tr>
                <th class="product-photo">List Products</th>
                <th class="produc-name"></th>
                <th class="produc-price">Price</th>
                <th class="product-quantity">qty</th>
                <th class="total-price">Total</th>
                <th class="product-remove"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataVariant as $variant)
            @php
            $picVariant = $variant -> kd_variant.".jpg";
            $namaVariant = $kdProduk."_VAR".$variant -> nama_variant.".jpg";
            @endphp
            <tr class="item_cart">
                <td class="product-photo"><img src="{{ env('EBUNGA_BUCKET') }}product/variant/{{ $picVariant }}" alt="Futurelife"></td>
                <td class="produc-name"><a href="#" title="">{{ $variant -> nama_variant }}</a></td>
                <td class="produc-price"><input value="Rp. {{ $variant -> harga }}" size="4" type="text"></td>
                <td class="product-quantity">
                    <form enctype="multipart/form-data">
                    <div class="product-signle-options product_15 clearfix">
                        <div class="selector-wrapper size">
                            <div class="quantity"><span class="minus"><i class="fa fa-minus"></i></span>
                                <input data-step="1" value="0" title="Qty" class="qty" size="4" type="text">
                            <span class="plus"><i class="fa fa-plus"></i></span></div>
                        </div>
                    </div>
                </form>
                </td>
                <td class="total-price">$69.90</td>
                <td class="product-remove"><a class="remove" href="#" title="close"><img src="http://landing.engotheme.com/html/jenstore/demo/img/icon-delete-cart.png" alt="close"></a></td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    <div class="row-total">
        <div class="float-left">
            <h3>Sub Total</h3>
        </div>
        <!--End align-left-->
        <div class="float-right">
            <p>$1,156.00</p>
        </div>
        <!--End align-right-->
    </div>
    <div class="box space-30">
        <div class="float-left">
            <a class="link-v1 lh-50 margin-right-20 space-20" href="#" title="CLEAR SHOPPING CART">CLEAR SHOPPING CART</a>
            <a class="link-v1 lh-50 space-20" href="#" title="UPDATE SHOPPING CART">UPDATE SHOPPING CART</a>
        </div>
        <!-- End float left -->
        <div class="float-right">
            <a class="link-v1 lh-50 bg-brand" href="#" title="CONTINUS SHOPPING">CONTINUS SHOPPING</a>
        </div>
        <!-- End float-right -->
    </div>
    <!-- End box -->
    <div class="box cart-total space-30">
        <div class="row">
            <div class="col-md-4 space-30">
                <div class="item coupon-code">
                    <h3 class="title" style="font-family:'Poppins'!important;">COUPON CODE</h3>
                    <p>Enter your coupon code if you have one</p>
                    <form enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control space-20" id="coundpon">
                        </div>
                    </form>
                    <a class="link-v1 lh-50 rt" href="#" title="apply coupon">APPLY COUPON</a>
                </div>
            </div>
            <div class="col-md-4 space-30">
                <div class="item">
                    <h3 class="title">ESTIMEDE SHIPPING AND TAX</h3>
                    <p>Enter your destinetion to get a shipping estimede </p>
                    <form enctype="multipart/form-data">
                        <div class="form-group">
                            <label class=" control-label" for="inputcountry">Country</label>
                            <input type="text" class="form-control space-20" id="inputcountry">
                        </div>
                        <div class="form-group">
                            <label class=" control-label" for="state">STATE/PROVINCE <span>*</span></label>
                            <input type="text" class="form-control space-20" id="state">
                        </div>
                        <div class="form-group">
                            <label class=" control-label" for="zip-code">ZIP/POSTAL CODE <span>*</span></label>
                            <input type="text" class="form-control space-20" id="zip-code">
                        </div>
                    </form>
                    <a class="link-v1 lh-50 rt" href="#" title="ESTIMADE">ESTIMADE</a>
                </div>
            </div>
            <!-- End col-md-4 -->
            <div class="col-md-4 space-30">
                <div class="item">
                    <h3 class="title">CART TOTAL</h3>
                    <p class="box"><span class="float-left">SHIPPING</span><span class="float-right">$52.00</span></p>
                    <p class="box space-30"><span class="float-left"><b>SUBTOTAL</b></span><span class="float-right"><b class="color-brand">$5,200.00</b></span></p>
                    <a class="link-v1 lh-50 rt" href="#" title="POCEEED TO CHECKOUT">POCEEED TO CHECKOUT</a>
                </div>
            </div>
            <!-- End col-md-4 -->
        </div>
    </div>
    <!-- End box -->
</div>
</div>

