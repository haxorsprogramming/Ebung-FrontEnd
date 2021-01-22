<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\OrderProdukMdl;
use App\Models\OrderProdukDetailsMdl;
use App\Models\ProdukMdl;
use App\Models\BranchSellerMdl;

class OrderSellerCtr extends Controller
{
    public function orderlist()
    {
        $userLogin = session('userLogin');
        $dataOrderSeller = array();
        $dataBranch = BranchSellerMdl::where('')
        $dr = ['sellerId' => $userLogin];
        return view('account.seller.order.order_list', $dr);
    }
}
