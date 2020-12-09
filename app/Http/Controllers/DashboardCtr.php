<?php

// import namespace 
namespace App\Http\Controllers;
// import lib 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// import model 


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
        $userLogin = $request -> session() -> get('userLogin');
        $page_title = 'Dashboard Seller';
        $page = 'seller_dashboard';
        $dr = ['user_login' => $userLogin, 'page' => $page, 'page_title' => $page_title];
        return view('account.dashboard_seller', $dr);
    }
}
