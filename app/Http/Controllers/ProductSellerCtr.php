<?php

// import namespace
namespace App\Http\Controllers;
// import lib
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
// import model
use App\Models\BranchSellerMdl;
use App\Models\ProdukMdl;

class ProductSellerCtr extends Controller
{
    public function productlist(Request $request)
    {
        $userLogin = $request -> session() -> get('userLogin');
        $dataProduct = ProdukMdl::where('id_seller', $userLogin) -> get();
        $dr = ['dataProduct' => $dataProduct];
        return view('account.seller.product.product_list', $dr);
    }
}
