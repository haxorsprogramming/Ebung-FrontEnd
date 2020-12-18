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
            <a href="#!" class="btn btn-danger" style="border:0px solid white;color:#fff;" onclick="submitProduct()">
                <i class="fas fa-save"></i> Save new product
            </a>
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
                    <input type="text" class="form-control" id="txtProductName" v-model="productName">
                    <small id="helpProductName" class="{{ $divError }}" style="<?=$dn; ?>">
                        @{{ messageHelp[0].productName }}
                    </small>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" onchange="kategoriPilih()" id="txtKategori">
                        <option value="none">--- Choose Kategori ---</option>
                        @foreach($kategoriProduct as $kategori)
                        <option value="{{ $kategori -> kd_kategori }}">{{ $kategori -> nama_kategori }}</option>
                        @endforeach
                    </select>
                    <small id="helpKategori" class="{{ $divError }}" style="<?=$dn; ?>">
                        @{{ messageHelp[0].kategori }}
                    </small>
                </div>
                <div class="form-group">
                    <label>Sub-Kategori</label>
                    <select class="form-control" id="txtSubKategori">
                        <option value="none">--- Choose Sub-Kategori ---</option>
                        <option v-for="sk in subKategori" v-bind:value="sk.idSubKategori">@{{ sk.nama }}</option>
                    </select>
                    <small id="helpSubKategori" class="{{ $divError }}" style="<?=$dn; ?>">
                        @{{ messageHelp[0].subKategori }}
                    </small>
                </div>
                <div class="form-group">
                    <label>Branch</label>
                    <select class="form-control" id="txtBranch">
                        <option value="none">--- Choose Branch ---</option>
                        @foreach($dataBranch as $branch)
                        <option value="{{ $branch -> kd_branch }}">{{ $branch -> nama_branch }}</option>
                        @endforeach
                    </select>
                    <small id="helpBranch" class="{{ $divError }}" style="<?=$dn; ?>">
                        @{{ messageHelp[0].kategori }}
                    </small>
                </div>
                <div class="form-group" id="txtPic">
                    <div style="text-align: center;">
                    <label>Main photos of product</label><br/>
                    <div class="cropme" style="width: 400px;height:400px;" id="txtFotoUtama"></div>
                    <small id="helpMainPhotos" class="{{ $divError }}" style="<?=$dn; ?>">
                        @{{ messageHelp[0].mainPhotos }}
                    </small>
                    </div>
                    <table>
                        <tr>
                            <td>Varian 1</td>
                            <td><div class="cropme" style="margin-top:15px;width: 100px;height:100px;" id="txtVariant1"></div></td>
                            <td>Varian 2</td>
                            <td><div class="cropme" style="margin-top:15px;width: 100px;height:100px;" id="txtVariant2"></div></td>
                        </tr>
                        <tr>
                            <td>Varian 3</td>
                            <td><div class="cropme" style="margin-top:15px;width: 100px;height:100px;" id="txtVariant3"></div></td>
                            <td>Varian 4</td>
                            <td><div class="cropme" style="margin-top:15px;width: 100px;height:100px;" id="txtVariant4"></div></td>
                        </tr>
                    </table>
                    <small id="helpMinPic" class="{{ $divError }}" style="<?=$dn; ?>">
                        @{{ messageHelp[0].minPic }}
                    </small>
                </div>
            </div>
            <div class="col-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <label>Deskripsi product</label><br/>
                    <textarea id="txtDeksripsiProduct" class="form-control" name="txtDeksripsiProduct" rows="10" cols="50"></textarea>
                    <small id="helpDeksripsi" class="{{ $divError }}" style="<?=$dn; ?>">
                        @{{ messageHelp[0].deksripsi }}
                    </small>
                </div>
                <div class="form-group">
                    <label>Price (IDR)</label>
                    <input type="text" class="form-control" id="txtPrice">
                    <small id="helpPrice" class="{{ $divError }}" style="<?=$dn; ?>">
                        @{{ messageHelp[0].price }}
                    </small>
                </div>
                <div class="form-group">
                    <label>Stock per Day</label>
                    <input type="text" class="form-control" id="txtStock">
                    <small id="helpStok" class="{{ $divError }}" style="<?=$dn; ?>">
                        @{{ messageHelp[0].stok }}
                    </small>
                </div>
                <div class="form-group">
                </div>
            </div>
        </div>
            <div style="text-align:center;margin-top:20px;">
                <a href='#!' class='view' onclick="submitProduct()"><i class="fas fa-plus-circle"></i> Save new product</a>
            </div>
    </div>
</div>

<script src="{{ asset('ladun/account_asset/js_custom/seller/product.js') }}"></script>