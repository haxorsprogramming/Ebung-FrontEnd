<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageCtr extends Controller
{

    public function home()
    {
        echo "Halo ...";
    }

    public function listproduk($id_produk)
    {
        echo $id_produk;
    }

}
