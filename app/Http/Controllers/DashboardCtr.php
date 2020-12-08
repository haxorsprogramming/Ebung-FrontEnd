<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardCtr extends Controller
{
    public function dashboard(Request $request)
    {
        $link_pic_temp = "https://demo.hasthemes.com/fultala-preview-v2/fultala/assets/images/product/product-01.jpg";
        $user_login = $request -> session() -> get('user_login');
        $page = 'customer_dashboard';
        $page_title = "Dashboard Customer";
        $dr = ['user_login' => $user_login, 'link_pic' => $link_pic_temp, 'page' => $page, 'page_title' => $page_title];
        return view('account.dashboard_customer', $dr);
    }

    public function sellerdashboard(Request $request)
    {
        $page_title = 'Dashboard Seller';
        $page = 'seller_dashboard';
        $dr = ['page' => $page, 'page_title' => $page_title];
        return view('account.dashboard_seller', $dr);
    }
}
