<?php

// import namespace
namespace App\Http\Controllers;
// import lib
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
// import model
use App\Models\BranchSellerMdl;
use App\Models\ProvinsiMdl;
use App\Models\KabupatenMdl;
use App\Models\KecamatanMdl;
use App\Models\KelurahanMdl;;

class BranchSellerCtr extends Controller
{
    public function cekbranchlocation($idBranch)
    {
        $dataBranch = BranchSellerMdl::where('kd_branch', $idBranch) -> first();
        $alamat = $dataBranch -> alamat;
        $exAlamat = explode("-", $alamat);
        $kelurahanId = $exAlamat[0];
        $dataKelurahan = KelurahanMdl::where('id_kel', $kelurahanId) -> first();
        $kelurahanCap = $dataKelurahan -> nama;
        $dr = ['kelurahan' => $kelurahanCap];
        return \Response::json($dr);
    }

    public function coverageareabranch()
    {
        $provinsi = ProvinsiMdl::all();
        $dr = ['dataProvinsi' => $provinsi];
        return view('account.seller.branch.coverage_area', $dr);
    }


}
