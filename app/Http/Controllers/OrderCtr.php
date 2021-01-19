<?php

/**
 * Import namespace & library
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
/**
 * Import app
 */
use App\Models\ProdukMdl;
use App\Models\KategoriMdl;
use App\Models\OrderProdukDetailsMdl;
use App\Models\OrderProdukMdl;

class OrderCtr extends Controller
{

    public function submitneworder(Request $request)
    {
        /**
         * create order number
         */
        $kdOrder = Str::random(40);
        /**
         * get session user
         */
        $userLogin = $request -> session() -> get('userLogin');
        /**
         * get post data
         */
        $kdProduk = $request -> kdProduk;
        /**
         * Get data produk
         */
        $dataProduk = ProdukMdl::where('kd_produk', $kdProduk) -> first();
        $qt = $request -> qt;
        $total = $dataProduk -> harga * $qt;
        
        $prefixBelakang = Str::random(100);
        $url = $kdOrder."-ORDER-".$prefixBelakang;
        /**
         * Save order product
         */
        DB::table('tbl_order_produk') -> insert([
            'kd_order' => $kdOrder,
            'customer' => $userLogin,
            'kd_product' => $kdProduk,
            'qt' => $qt,
            'total' => $total
        ]);
        // save ke order details
        DB::table('tbl_order_details') -> insert([
            'kd_order' => $kdOrder,
            'kategori' => '-',
            'sub_kategori' => '-',
            'sender_name' => $request -> senderName,
            'receiver_name' => $request -> recName,
            'receiver_email' => $request -> recEmail,
            'receiver_phone' => $request -> recPhone,
            'note_to_seller' => '',
            'greeting_card_note' => $request -> capGreetingCard,
            'delivery_date' => $request -> deliveryDate,
            'delivery_address' => $request -> address,
            'delivery_details_address' => $request -> address,
            'status_approve' => 'n',
            'status_payment' => 'pending',
            'status_order' => 'MENUNGGU_PEMBAYARAN'
        ]);
        $dr = ['status' => 'success', 'page' => $url];
        return \Response::json($dr);
    }

    public function orderstatusfront($kdOrder)
    {
        $kdOrderEx = Str::of($kdOrder) -> explode('-');
        $kdOrderFix = $kdOrderEx[0];
        $kategori = KategoriMdl::all();
        $dataOrder = OrderProdukMdl::where('kd_order', $kdOrderFix) -> first();
        $orderId = "ORDER-19081".$dataOrder -> id;
        $dataProduk = ProdukMdl::where('kd_produk', $dataOrder -> kd_product) -> first();
        $orderDetails = OrderProdukDetailsMdl::where('kd_order', $kdOrderFix) -> first();
        $dr = [
            'kdOrder' => $kdOrderFix, 
            'kategori' => $kategori, 
            'page' => 'orderdetails', 
            'dataOrder' => $dataOrder, 
            'dataProduk' => $dataProduk,
            'orderDetails' => $orderDetails,
            'orderId' => $orderId
        ];
        return view('futala_order.orderdetails', $dr);
    }

    public function savetemporder(Request $request)
    {
        // {'totalHarga':totalHarga, 'kdProduk':kdProdukGlobal, 'hargaAt':hargaAt, 'qt':qt}
        $kdSession = Str::random(40);
        $totalHarga = $request -> totalHarga;
        $kdProduk = $request -> kdProduk;
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
