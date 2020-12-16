<?php
// import namespace
namespace App\Http\Controllers;
// import lib 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// import model 
use App\Models\ProdukMdl;
use App\Models\KelurahanMdl;
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

        $daerah = KelurahanMdl::where('nama', 'like', '%'.$slug.'%') -> take(5) -> get();
        
        foreach($daerah as $da){
            $idKel = $da -> id_kel;
            //cek apakah id kel & produk ada di coverage area
            $cekArea = CoverageAreaMdl::where('kd_area', $idKel) -> where('kd_branch', $idBranch) -> count();
            if($cekArea == 1){
                $status_cover = 'yes';
            }else{
                $status_cover = 'no';
            }
            $arrTemp['nama'] = $da -> nama;
            $arrTemp['id_kel'] = $idKel;
            $arrTemp['kd_produk'] = $kdProduk;
            $arrTemp['status_coverage'] = $status_cover;
            $dr['temp_coverage'][] = $arrTemp;
        }

        return \Response::json($dr);
    }
}
