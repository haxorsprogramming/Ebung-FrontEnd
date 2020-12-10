<div class="card card-primarya" id="divProductList">
    <div class="card-header">
        <h4>List Product</h4>
        <div class="card-header-action">
            <a href="#!" class="btn btn-primary" style="border:0px solid white;color:#fff;"><i class="fas fa-plus-circle"></i> Add products</a>
        </div>
    </div>
    <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>Product</td>
                        <td>Kategori</td>
                        <td>Harga</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataProduct as $product)
                        <tr>
                            <td>{{ $product -> nama_produk }}</td>
                            <td>{{ $product -> kategori }}</td>
                            <td>{{ $product -> harga }}</td>
                            <td><a href='#!' class="view">Details</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>

<script src="{{ asset('ladun/account_asset/js_custom/seller/product.js') }}"></script>