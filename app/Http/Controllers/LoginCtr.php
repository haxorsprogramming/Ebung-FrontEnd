<?php

// import namespace 
namespace App\Http\Controllers;
// import lib 

use App\Models\User;
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
        $css_file = 'style-about.css';
        $js_file = 'ebunga-login.js';
        $page = 'Register';
        $dr = ['css_file' => $css_file, 'js_file' => $js_file, 'page' => $page];
        return view('login.login', $dr);
    }

    public function loginproses(Request $request)
    {
        // {'username':username, 'password':password}
        $username = $request -> username;
        $password = $request -> password;
        // cek username ada atau tidak
        $jlh_username = UserMdl::where('username', $username) -> count();
        if($jlh_username < 1){
            $dr = ['status' => 'no_username'];
        }else{
            // get password from db 
            $data_user = UserMdl::where('username', $username) -> first(); 
            $password_user_db = $data_user -> password;
            // cek password input & from database 
            $cek_password = password_verify($password, $password_user_db);
            if($cek_password == true){
                // set session 
                session(['user_login' => $username]);
                $dr = ['status' => 'success'];
            }else{
                $dr = ['status' => 'wrong_password'];
            }
        }
        return \Response::json($dr);
    }
}
