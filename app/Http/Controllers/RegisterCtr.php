<?php
// import namespace 
namespace App\Http\Controllers;
// import lib 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RegisterCtr extends Controller
{
    public function registerpage()
    {
        return view('register.register');
    }
}
