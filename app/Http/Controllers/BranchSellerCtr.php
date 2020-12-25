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

    public function detailbranch($idBranch)
    {
        $userLogin = session('userLogin');
        $dataBranch = BranchSellerMdl::where('kd_branch', $idBranch) -> first();
        // cari alamat branch 
        $alamat = $dataBranch -> alamat;
        $exAlamat = explode("-", $alamat);
        $idKel = $exAlamat[0];
        $idKec = $exAlamat[1];
        $idKab = $exAlamat[2];
        // cari nama kelurahan 
        $dataKel = KelurahanMdl::where('id_kel', $idKel) -> first();
        $namaKel = $dataKel -> nama;
        //cari nama kecamatan 
        $dataKec = KecamatanMdl::where('id_kec', $idKec) -> first();
        $namaKec = $dataKec -> nama;
        $cssBtn = 'border:0px solid white;color:#fff;';
        $dr = ['idBranch' => $idBranch, 'userLogin' => $userLogin, 'dataBranch' => $dataBranch, 'cssBtn' => $cssBtn, 'namaKel' => $namaKel, 'namaKec' => $namaKec];
        return view('account.seller.branch.branch_detail', $dr);
    }

    public function getdatakelurahanformarker($idKel)
    {
        $dataKel = KelurahanMdl::where('id_kel', $idKel) -> first();
        $namaKel = $dataKel -> nama;
        $idKec = $dataKel -> id_kec;
        $dataKec = KecamatanMdl::where('id_kec', $idKec) -> first();
        $namaKec = $dataKec -> nama;
        $dr = ['namaKel' => $namaKel, 'namaKec' => $namaKec];
        return \Response::json($dr);
    }


}
