<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingCtr extends Controller
{
    public function viewemailregistrasi()
    {
        $dr = ['nama' => 'aditia', 'website' => 'http//ebunga.co.id'];
        return view('layout_email.mail_registrasi_view', $dr);
    }
}
