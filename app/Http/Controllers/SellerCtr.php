<?php

// import namespace
namespace App\Http\Controllers;
// import lib
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// import model
use App\Models\BranchSellerMdl;

class SellerCtr extends Controller
{

    public function sellerdashboard()
    {
        return view('account.seller.dashboard');
    }

    public function sellerbranch(Request $request)
    {
        $userLogin = $request -> session() -> get('userLogin');
        $branch = BranchSellerMdl::where('id_seller', $userLogin) -> get();
        $countrySupport = DB::table('tbl_country_support') -> get();
        $dr = ['dataBranch' => $branch, 'countrySupport' => $countrySupport];
        return view('account.seller.branch', $dr);
    }
}
