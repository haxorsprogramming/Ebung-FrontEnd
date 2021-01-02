<?php

/**
 * Import namespace & library
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderCtr extends Controller
{
    public function savetemporder(Request $request)
    {
        // {'totalHarga':totalHarga, 'kdProduk':kdProdukGlobal, 'hargaAt':hargaAt, 'qt':qt}
        $kdSession = Str::random(40);
        $totalHarga = $request -> totalHarga;
        $kdProduk = $request -> kdProduk;
        $hargaAt = $request -> hargaAt;
        $qt = $request -> qt;
        DB::table('tbl_temp_order') -> insert([
            'kd_temp' => $kdSession,
            'customer' => '-',
            'kd_product' => $kdProduk,
            'qt' => $qt,
            'total' => $totalHarga 
        ]);
        session(['orderSession' => $kdSession]);
        $dr = ['status' => 'success create session'];
        return \Response::json($dr);
    }
}
