<?php

// import namespace 
namespace App\Http\Controllers;
// import lib 
use Illuminate\Http\Request;
// import model 
use App\Models\KategoriMdl;
use App\Models\ProdukMdl;
// import another controller
use App\Http\Controllers\DaerahCtr;


class PageCtr extends Controller
{

    public function home()
    {
        $kategori = KategoriMdl::all();
        $produk = ProdukMdl::all();
        $dr = ['kategori' => $kategori, 'produk' => $produk];
        
        return view('home.home', $dr);
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
