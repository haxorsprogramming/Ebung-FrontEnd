<?php

// import namespace 
namespace App\Http\Controllers;
// import lib 
use Illuminate\Http\Request;
// import model 
use App\Models\KategoriMdl;
// import another class 
use App\Http\Controllers\DaerahCtr;


class PageCtr extends Controller
{

    public function home()
    {
        $kategori = KategoriMdl::all();
        $dr = ['kategori' => $kategori ];
        return view('home.home');
    }

    public function listproduk($id_produk)
    {
        $dr = ['status' => 'sukses'];

        return \Response::json($dr);
    }

    public function contact()
    {
        return view('home.contact');
    }

}
