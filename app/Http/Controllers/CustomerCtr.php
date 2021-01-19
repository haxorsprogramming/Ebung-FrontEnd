<?php
/**
 * Import namespace & lib
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
/**
 * Import app
 */
use App\Models\ProdukMdl;

class CustomerCtr extends Controller
{
    public function dashboard()
    {
        return view('account.customer.dashboard');
    }
}
