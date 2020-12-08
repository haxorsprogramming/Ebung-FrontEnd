<?php

// import namespace 
namespace App\Http\Controllers;
// import lib 
use Illuminate\Http\Request;
// import model 

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
}
