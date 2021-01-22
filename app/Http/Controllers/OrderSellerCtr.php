<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\OrderProdukMdl;
use App\Models\OrderProdukDetailsMdl;
use App\Models\ProdukMdl;
use App\Models\BranchSellerMdl;

class OrderSellerCtr extends Controller
{
    public function orderlist()
    {
        $userLogin = session('userLogin');
        $dataOrder = OrderProdukMdl::where('id_seller', $userLogin) -> get();
        $dr = ['sellerId' => $userLogin, 'dataOrder' => $dataOrder];
        return view('account.seller.order.order_list', $dr);
    }
}
