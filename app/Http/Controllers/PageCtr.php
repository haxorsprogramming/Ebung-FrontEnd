<?php
/**
 * Import namespace & lib
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrasiMail;
/**
 * Import model
 */
use App\Models\KategoriMdl;
use App\Models\ProdukMdl;
/**
 * Import another controller
 */
use App\Http\Controllers\DaerahCtr;
use Mockery\Undefined;

class PageCtr extends Controller
{

    public function home()
    {
        /**
         * Get data kategori
         */
        $kategori = KategoriMdl::all();
        /**
         * Get data produk
         */
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
        $request -> session() -> flush();
        return redirect('/');
    }

}
