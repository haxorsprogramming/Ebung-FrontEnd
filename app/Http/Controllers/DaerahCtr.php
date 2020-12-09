<?php

namespace App\Http\Controllers;
// import lib & helper 
use Illuminate\Http\Request;
// import model 
use App\Models\ProvinsiMdl;
use App\Models\KabupatenMdl;
use App\Models\KecamatanMdl;
use App\Models\KelurahanMdl;

// import another controller 

class DaerahCtr extends Controller
{

    public function getProvinsiAll()
    {
        $provinsi = ProvinsiMdl::all();
        $dr = ['provinsi' => $provinsi];
        return \Response::json($dr);
    }

    public function getKabupaten($id_provinsi)
    {
        $kabupaten = KabupatenMdl::where('id_prov', $id_provinsi) -> get();
        $dr = ['kabupaten' => $kabupaten];
        return \Response::json($dr);
    }

    public function getKecamatan($id_kabupaten)
    {
        $kecamatan = KecamatanMdl::where('id_kab', $id_kabupaten) -> get();
        $dr = ['kecamatan' => $kecamatan];
        return \Response::json($dr);
    }

    public function getKelurahan($id_kecamatan)
    {
        $kelurahan = KelurahanMdl::where('id_kec', $id_kecamatan) -> get();
        $dr = ['kelurahan' => $kelurahan];
        return \Response::json($dr);
    }
    
}
