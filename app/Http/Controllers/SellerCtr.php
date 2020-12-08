<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerCtr extends Controller
{

    public function sellerdashboard()
    {
        return view('account.seller.dashboard');
    }

    public function sellerbranch()
    {
        return view('account.seller.branch');
    }
}
