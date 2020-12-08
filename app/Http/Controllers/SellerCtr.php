<?php

// import namespace 
namespace App\Http\Controllers;
// import lib 
use Illuminate\Http\Request;
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
        $user_login = $request -> session() -> get('user_login');
        $branch = BranchSellerMdl::where('id_seller', $user_login) -> get();
        $dr = ['databranch' => $branch];
        return view('account.seller.branch', $dr);
    }
}
