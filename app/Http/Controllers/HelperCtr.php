<?php

// import namespace
namespace App\Http\Controllers;
// import lib
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
// import model
use App\Models\SubKategoriMdl;

class HelperCtr extends Controller
{
    
    function getsubkategori($idKategori)
    {
        $dataSubKategori = SubKategoriMdl::where('kd_kategori', $idKategori) -> get();
        $dr = ['dataSubKategori' => $dataSubKategori];
        return \Response::json($dr);
    }
    
    public function tesuploads3(Request $request)
    {
        $file = $request -> file('avatar');
        $filename = $request -> nama_file . '.' . $file->getClientOriginalExtension();
        Storage::disk('s3') -> put('ebunga-cdn/image/' . $filename, file_get_contents($file));
        echo "berhasil upload";
    }

}
