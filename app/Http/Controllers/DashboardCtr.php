<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardCtr extends Controller
{
    public function dashboard(Request $request)
    {
        $user_login = $request -> session()->get('user_login');
        $dr = ['user_login' => $user_login];
        return view('account.dashboard', $dr);
    }
}
