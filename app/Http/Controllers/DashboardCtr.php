<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardCtr extends Controller
{
    public function dashboard(Request $request)
    {
        $link_pic_temp = "https://demo.hasthemes.com/fultala-preview-v2/fultala/assets/images/product/product-01.jpg";
        $user_login = $request -> session()->get('user_login');
        $dr = ['user_login' => $user_login, 'link_pic' => $link_pic_temp];
        return view('account.dashboard', $dr);
    }

    public function sellerdashboard(Request $request)
    {
        
    }
}
