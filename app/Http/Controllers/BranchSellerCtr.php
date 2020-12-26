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
use App\Models\CoverageAreaMdl;

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
        $dataCoverage = CoverageAreaMdl::where('kd_branch', $idBranch) -> get();
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
        $dr = [
            'idBranch' => $idBranch, 
            'userLogin' => $userLogin, 
            'dataBranch' => $dataBranch, 
            'cssBtn' => $cssBtn, 
            'namaKel' => $namaKel, 
            'namaKec' => $namaKec,
            'dataCoverage' => $dataCoverage
        ];
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

    public function getbranchcoveragearea($idBranch)
    {
        $dataCoverageArea = CoverageAreaMdl::where('kd_branch', $idBranch) -> get();
        $dataR = array();
        foreach($dataCoverageArea as $area){
            $kdKelurahan = $area -> kd_area;
            $dataKelurahan = KelurahanMdl::where('id_kel', $kdKelurahan) -> first();
            $namaKelurahan = $dataKelurahan -> nama;
            $idKecamatan = $dataKelurahan -> id_kec;
            $dataKecamatan = KecamatanMdl::where('id_kec', $idKecamatan) -> first();
            $namaKecamatan = $dataKecamatan -> nama;
            $idKabupaten = $dataKecamatan -> id_kab;
            $dataKabupaten = KabupatenMdl::where('id_kab', $idKabupaten) -> first();
            $namaKabupaten = $dataKabupaten -> nama;
            $arrTemp['namaKelurahan'] = $namaKelurahan;
            $arrTemp['kdKelurahan'] = $kdKelurahan;
            $arrTemp['namaKecamatan'] = $namaKecamatan;
            $arrTemp['namaKabupaten'] = $namaKabupaten;
            $dataR[]  = $arrTemp;
        }
        $dr = ['dataCoverage' => $dataR];
        return \Response::json($dr);
    }

    public function savecoveragearea(Request $request)
    {
        // {'idKel':idKel, 'idBranch':idBranch}
        $idKel = $request -> idKel;
        $idBranch = $request -> idBranch;
        $kdCoverage = Str::random(10);
        DB::table('tbl_coverage_area') -> insert([
            'kd_coverage' => $kdCoverage,
            'kd_branch' => $idBranch,
            'kd_area' => $idKel
        ]);
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }

    public function clearcoveragearea(Request $request)
    {
        // {'idBranch':idBranch}
        $idBranch = $request -> idBranch;
        DB::table('tbl_coverage_area') -> where('kd_branch', $idBranch) -> delete();
        $dr = ['status' => 'success'];
        return \Response::json($dr);
    }

}
