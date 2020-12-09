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

    public function getKabupaten($id_prov)
    {
        $kabupaten = KabupatenMdl::where('id_prov', $id_prov) -> get();
        $dr = ['kabupaten' => $kabupaten];
        return \Response::json($dr);
    }
    
}
