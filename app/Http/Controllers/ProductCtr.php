<?php
/**
 * @license MIT, http://opensource.org/licenses/MIT
 * @copyright Ebunga (ebunga.co.id), 2020
 * @package laravel
 * @subpackage Controller
 */

/**
 * Import namespace & library
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
/**
 * Import model
 */
use App\Models\ProdukMdl;
use App\Models\KelurahanMdl;
use App\Models\KecamatanMdl;
use App\Models\CoverageAreaMdl;
use App\Models\KategoriMdl;
/**
 * Import another controller
 */
class ProductCtr extends Controller
{
    public function productall()
    {
        /**
         * Get data product from database with model
         */
        $dataProduct = ProdukMdl::take(5) -> get();
        /**
         * Get data kategori from database with model
         */
        $kategoriProduct = KategoriMdl::all();
        /**
         * Create data css, js 
         */
        $cssFile    = 'style-homev3.css';
        $jsFile     = 'ebunga-product-all.js';
        /**
         * Create variable to send the respons
         */
        $dr = ['page' => 'Home', 'cssFile' => $cssFile, 'jsFile' => $jsFile, 'dataproduct' => $dataProduct, 'dataKategori' => $kategoriProduct];
        /**
         * Return view
         */
        return view('product.all', $dr);      
    }

    public function checkarea(Request $request)
    {
        $slug = $request -> slug;
        $kdProduk = $request -> kd_produk;

        // Cek kd branch dari kd produk 
        $dataProduk = ProdukMdl::where('kd_produk', $kdProduk) -> first();
        $idBranch = $dataProduk -> id_branch;

        $daerah = KelurahanMdl::where('nama', 'like', '%'.$slug.'%') -> take(7) -> get();
        $resultView = "<table class='table table-home-coverage-area'>";
        foreach($daerah as $da){
            $idKel = $da -> id_kel;
            $idKec = $da -> id_kec;
            //cari nama kecamatan, kabupaten, provinsi 
            $dataKec = KecamatanMdl::where('id_kec', $idKec) -> first();
            $namaKec = $dataKec -> nama;
            //cek apakah id kel & produk ada di coverage area
            $cekArea = CoverageAreaMdl::where('kd_area', $idKel) -> where('kd_branch', $idBranch) -> count();
            if($cekArea == 1){
                $status_cover = "<a href='javascript:void(0)' class='btn-pilih-coverage' onclick='selectArea(\"".$idKel."\")'>Select</a>";
            }else{
                $status_cover = "<small>Sorry, this area not coverage ...</small>";
            }
            $resultView .= "<tr><td>".$da -> nama."<br/><small>".$namaKec."</small></td><td>".$status_cover."</td></tr>";
        }
        $resultView .= "</table>";
        return $resultView;
    }

    public function productdetails($idProduct)
    {
        $cssFile = 'style-product-detail.css';
        $jsFile = 'ebunga-product-details.js';
        $dataProduct = ProdukMdl::where('kd_produk', $idProduct) -> first();
        $dr = ['page' => 'Home', 'cssFile' => $cssFile, 'jsFile' => $jsFile, 'dataProduct' => $dataProduct];
        return view('product.details', $dr);
    }

    public function productkategory($idKategori)
    {
        $dataProduct = ProdukMdl::where('sub_kategori', $idKategori) -> get();
        $kategoriProduct = KategoriMdl::all();
        $cssFile = 'style-homev3.css';
        $jsFile = 'ebunga-product-all.js';
        $dr = ['page' => 'Home', 'cssFile' => $cssFile, 'jsFile' => $jsFile, 'dataproduct' => $dataProduct, 'dataKategori' => $kategoriProduct];
        return view('product.all', $dr);      
    }

}
