<?php

// import namespace
namespace App\Http\Controllers;
// import lib
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
// import model
use App\Models\BranchSellerMdl;
use App\Models\ProdukMdl;
use App\Models\KategoriMdl;

class ProductSellerCtr extends Controller
{
    public function productlist(Request $request)
    {
        $userLogin = $request -> session() -> get('userLogin');
        $kategoriProduct = KategoriMdl::all();
        $dataBranch = BranchSellerMdl::where('id_seller', $userLogin) -> where('status_branch', 'active') -> get();
        $dataProduct = ProdukMdl::where('id_seller', $userLogin) -> get();
        $dr = ['dataProduct' => $dataProduct, 'kategoriProduct' => $kategoriProduct, 'dataBranch' => $dataBranch];
        return view('account.seller.product.product_list', $dr);
    }

    public function addproductproses(Request $request)
    {
        // {'name':productName, 'deks':deksripsiProduk, 'kategori':kategori, 'subKategori':subKategori, 'branch':branch, 'price':price, 'stock':stock}
        $userLogin = $request -> session() -> get('userLogin');
        $kdProduk = "EBUNGA".rand(1000,10000);
        $name = $request -> name;
        $deks = $request -> deks;
        $kategori = $request -> kategori;
        $subKategori = $request -> subKategori;
        $branch = $request -> branch;
        $price = $request -> price;
        $stock = $request -> stock;
        $pic = $request -> pic;
        $namaPic = $kdProduk.".jpg";
        DB::table('tbl_produk') -> insert ([
            'kd_produk' => $kdProduk,
            'nama_produk' => $name,
            'deks_produk' => $deks,
            'kategori' => $kategori,
            'sub_kategori' => $subKategori,
            'id_branch' => $branch,
            'id_seller' => $userLogin,
            'harga' => $price,
            'stok' => $stock,
            'foto_utama' => $namaPic,
            'active' => '1'
        ]);
        $image_array_1 = explode(";", $pic);
        $image_array_2 = explode(",", $image_array_1[1]);
        $data = base64_decode($image_array_2[1]);
        $imageName = time() . '.jpg';
        file_put_contents('ladun/ebunga_asset/image/product/'.$namaPic, $data);
        $dr = ['sukses' => $pic];
        return \Response::json($dr);
    }
}
