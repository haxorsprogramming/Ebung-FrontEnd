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
use Illuminate\Support\Str;
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
    public function productview($kategory, $area, $tipe)
    {
        $kategori = $kategory;
        $area = $area;
        $tipe = $tipe;
        echo $kategori.$area.$tipe;
    }

    public function all()
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
        /**
         * Get request from POST data
         */
        $slug       = $request -> slug;
        $kdProduk   = $request -> kd_produk;
        /**
         * Get id branch from data product
         */
        $dataProduk = ProdukMdl::where('kd_produk', $kdProduk) -> first();
        $idBranch   = $dataProduk -> id_branch;
        /**
         * Get data kelurahan from tabel kelurahan 
         */
        $daerah = KelurahanMdl::where('nama', 'like', '%'.$slug.'%') -> take(7) -> get();
        /**
         * Create variable header to result
         */
        $resultView = "<table class='table table-home-coverage-area'>";
        /**
         * Foreach data daerah to create result object
         */
        foreach($daerah as $da){
            /**
             * Get id kelurahan & id kecamatan 
             */
            $idKel = $da -> id_kel;
            $idKec = $da -> id_kec;
            /**
             * Get kecamatan name from database with model
             */
            $dataKec = KecamatanMdl::where('id_kec', $idKec) -> first();
            $namaKec = $dataKec -> nama;
            /**
             * Get total area from database with model
             */
            $cekArea = CoverageAreaMdl::where('kd_area', $idKel) -> where('kd_branch', $idBranch) -> count();
            /**
             * If total area 1, area will coverage
             */
            if($cekArea == 1){
                /**
                 * Create button for select area
                 */
                $status_cover = "<a href='javascript:void(0)' class='btn-pilih-coverage' onclick='selectArea(\"".$idKel."\")'>Select</a>";
            }else{
                /**
                 * Caption area not corverage
                 */
                $status_cover = "<small>Sorry, this area not coverage ...</small>";
            }
            /**
             * Result view data to add name, cover status, kecamatan name
             */
            $resultView .= "<tr><td>".$da -> nama."<br/><small>".$namaKec."</small></td><td>".$status_cover."</td></tr>";
        }
        /**
         * End for result view
         */
        $resultView .= "</table>";
        /**
         * Send response to html
         */
        return $resultView;
    }

    public function checkslugonly(Request $request)
    {
        $slug = $request -> slug;
        $dataKel = KelurahanMdl::where('nama', 'like', '%'.$slug.'%') -> take(7) -> get();
        $resultView = "<table class='table table-home-coverage-area'>";
        foreach($dataKel as $kel){
            $converted = Str::kebab($kel -> nama);
            $resultView .= "<tr>";
            $resultView .= "<td>".$converted."</td>";
            $resultView .= "<td><a href='".url('product/area/'.$kel -> id_kel)."'><i class='fas fa-search'></i></a></td>";
            $resultView .= "</tr>";
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
