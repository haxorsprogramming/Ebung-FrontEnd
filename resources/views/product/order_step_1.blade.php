<div class="container container-ver2 space-padding-tb-30" style="display: none;" id="divStepOrder">
    <div class="row head-cart">
        <div class="col-md-4 space-30">
            <div class="item active center">
                <p class="icon">01</p>
                <h3>Order Details</h3>
            </div>
        </div>
        <!-- End col-md-4 -->
        <div class="col-md-4 space-30">
            <div class="item center">
                <p class="icon">02</p>
                <h3>Payment</h3>
            </div>
        </div>
        <!-- End col-md-4 -->
        <div class="col-md-4 space-30">
            <div class="item center">
                <p class="icon">03</p>
                <h3>Order completed</h3>
            </div>
        </div>
        <!-- End col-md-4 -->
    </div>

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
            <tr class="item_cart">
                <td class="product-photo" style="text-align: center;">
                    <img id="txtPicSelected" src="{{ env('EBUNGA_S3_BUCKET') }}/product/main-product/{{ $dataProduct -> foto_utama }}" style="width:200px;" alt="Product Selected">
                    <br/>
                    <span style="font: 400 18px 'Poppins';text-align:center;font-weight: bold;">{{ $dataProduct -> nama_produk }}</span>
                </td>
                <td class="produc-name"><a href="javascript:void(0)" id="txtVariantProductOrder">Main Product</a></td>
                <td class="total-price">$69.90</td>
                <td class="total-price">$69.90</td>
                <td class="total-price">$69.90</td>
                <td class="product-remove"></td>
            </tr>
            
        </tbody>
    </table>

</div>