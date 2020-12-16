<?php
// import namespace
namespace App\Http\Controllers;
// import lib 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// import model 
use App\Models\ProdukMdl;
use App\Models\KelurahanMdl;
use App\Models\KecamatanMdl;
use App\Models\CoverageAreaMdl;
// import another controller 

class ProdukCtr extends Controller
{
    public function detailproduct()
    {
                
    }

    public function checkarea(Request $request)
    {
        $slug = $request -> slug;
        $kdProduk = $request -> kd_produk;

        // Cek kd branch dari kd produk 
        $dataProduk = ProdukMdl::where('kd_produk', $kdProduk) -> first();
        $idBranch = $dataProduk -> id_branch;

        $daerah = KelurahanMdl::where('nama', 'like', '%'.$slug.'%') -> take(10) -> get();
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
                $status_cover = "<a href='#!' class='btn-pilih-coverage' onclick='selectArea()'>Select</a>";
            }else{
                $status_cover = '<small>Sorry, this area not coverage ...</small> ';
            }
            $resultView .= "<tr><td>". $da -> nama."<br/><small>".$namaKec."</small></td><td>".$status_cover."</td></tr>";
        }
        $resultView .= "</table>";
        return $resultView;
    }
}
