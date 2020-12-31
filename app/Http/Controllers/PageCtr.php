<?php

// import namespace 
namespace App\Http\Controllers;
// import lib 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrasiMail;
// import model 
use App\Models\KategoriMdl;
use App\Models\ProdukMdl;
// import another controller
use App\Http\Controllers\DaerahCtr;
use Mockery\Undefined;

class PageCtr extends Controller
{

    public function home()
    {
        $kategori = KategoriMdl::all();
        $produk = ProdukMdl::all();
        $cssFile = 'style-homev3.css';
        $jsFile = 'ebunga.js';
        $dr = ['kategori' => $kategori, 'produk' => $produk, 'page' => 'Home', 'cssFile' => $cssFile, 'jsFile' => $jsFile];
        
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

    public function teskirimemail()
    {
        $dr = ['nama' => 'dindananinda@gmail.com'];

        Mail::to('alditha.forum@gmail.com') -> send(new RegistrasiMail($dr));

        echo "Email telah terkirim";
    }

    public function logout(Request $request)
    {
        // clear session 
        $request -> session() -> flush();
        return redirect('/');
    }

}
