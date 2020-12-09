<?php

// import namespace
namespace App\Http\Controllers;
// import lib
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
// import model
use App\Models\UserMdl;

class LoginCtr extends Controller
{
    public function loginpage()
    {
        $cssFile = 'style-about.css';
        $jsFile = 'ebunga-login.js';
        $page = 'Login';
        $dr = ['cssFile' => $cssFile, 'jsFile' => $jsFile, 'page' => $page];
        return view('login.login', $dr);
    }

    public function loginproses(Request $request)
    {
        // {'username':username, 'password':password}
        $username = $request -> username;
        $password = $request -> password;
        // cek username ada atau tidak
        $jlhUsername = UserMdl::where('username', $username) -> count();
        if($jlhUsername < 1){
            $dr = ['status' => 'noUsername'];
        }else{
            // get password from db
            $dataUser = UserMdl::where('username', $username) -> first();
            $passwordUserDb = $dataUser -> password;
            // cek password input & from database
            $cekPassword = password_verify($password, $passwordUserDb);
            if($cekPassword == true){
                // set session
                session(['userLogin' => $username]);
                $dr = ['status' => 'success'];
            }else{
                $dr = ['status' => 'wrongPassword'];
            }
        }
        return \Response::json($dr);
    }
}
