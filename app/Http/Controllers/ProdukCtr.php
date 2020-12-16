<?php
// import namespace
namespace App\Http\Controllers;
// import lib 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// import model 
use App\Models\ProdukMdl;
use App\Models\DesaMdl;
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

        // $daerah = DesaMdl::where('nama', 'like', '%'.$slug.'%') -> take(5) -> get();
        
        // foreach($daerah as $da){
        //     $id_kel = $da -> id_kel;
        //     //cek apakah id kel & produk ada di coverage area
        //     $cekArea = CoverageAreaMdl::where('kd_area', $id_kel) -> where('kd_produk', $kd_produk) -> count();
        //     if($cekArea == 1){
        //         $status_cover = 'yes';
        //     }else{
        //         $status_cover = 'no';
        //     }
        //     $arrTemp['nama'] = $da -> nama;
        //     $arrTemp['id_kel'] = $id_kel;
        //     $arrTemp['kd_produk'] = $kd_produk;
        //     $arrTemp['status_coverage'] = $status_cover;
        //     $dr['temp_coverage'][] = $arrTemp;
        // }
        $dr = ['slug' => $slug, 'kdProduk' => $kdProduk];

        return \Response::json($dr);
    }
}
