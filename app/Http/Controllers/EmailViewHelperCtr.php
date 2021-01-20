<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailViewHelperCtr extends Controller
{
    public function registrasiuser()
    {
        $email = 'alditha.forum@gmail.com';
        $token_aktivasi = '1244334';
        $dr = ['email' => $email, 'website' => 'ebunga.co.id', 'token_aktivasi' => $token_aktivasi];
        return view('layout_email.notif_new_registrasi', $dr);
    }
}
