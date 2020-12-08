<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardCtr extends Controller
{
    public function dashboard()
    {
        return view('account.dashboard');
    }
}
