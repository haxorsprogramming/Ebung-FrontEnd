<div class="card card-primarya" id="divProductList">
    <div class="card-header">
        <h4>List Product</h4>
        <div class="card-header-action">
            <a href="#!" class="btn btn-primary" style="border:0px solid white;color:#fff;" @click="tambahProductTampilAtc">
                <i class="fas fa-plus-circle"></i> Add products
            </a>
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
                    <td>Rp. {{ number_format($product -> harga) }}</td>
                    <td><a href='#!' class="view" @click="detailProductAtc"><i class="fas fa-eye"></i> Details</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="card card-prim" id="divTambahProduct" style="display: none;">
    <div class="card-header">
        <h4>Add New Product</h4>
        <div class="card-header-action">
            <a href="#!" class="btn btn-primary" style="border:0px solid white;color:#fff;" @click="backAtc">
                <i class="fas fa-arrow-circle-left"></i> Back
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" id="txtProductName">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" onchange="kategoriPilih()" id="txtKategori">
                        <option value="none">--- Choose Kategori ---</option>
                        @foreach($kategoriProduct as $kategori)
                        <option value="{{ $kategori -> kd_kategori }}">{{ $kategori -> nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Sub-Kategori</label>
                    <select class="form-control" id="txtSubKategori">
                        <option value="none">--- Choose Sub-Kategori ---</option>
                        <option v-for="sk in subKategori">@{{ sk.nama }}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Branch</label>
                    <select class="form-control">
                        <option value="none">--- Choose Branch ---</option>
                        @foreach($dataBranch as $branch)
                        <option>{{ $branch -> nama_branch }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Main photos of product</label>
                    <input type="file" id="fileInput" name="txtFoto" image/* />
                    <hr/>
                    <canvas id="canvas">
                        Your browser does not support the HTML5 canvas element.
                    </canvas>
                    <input type="button" id="btnCrop" value="Crop" />
		            <input type="button" id="btnRestore" value="Restore" />
                </div>
                
                <div>
                <div id="result"></div>
                    <a href="#!" class="view" id="txtCrop">Crop</a>
                </div>
            </div>
            <div class="col-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <label>Variant</label><br/>
                    <img id="divHasilCrop">
                </div>
            </div>
        </div>

    </div>
</div>

<script src="{{ asset('ladun/account_asset/js_custom/seller/product.js') }}"></script>