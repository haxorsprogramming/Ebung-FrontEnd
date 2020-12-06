<?php
// import namespace 
namespace App\Http\Controllers;
// import lib 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
// import model 
use App\Models\RegistrasiUserMdl;
// import mail 
use App\Mail\RegistrasiMail;

class RegisterCtr extends Controller
{
    public function registerpage()
    {
        return view('register.register');
    }

    public function registerproses(Request $request)
    {
        // {'email':email, 'password':password} 
        $email = $request -> email;
        $password = $request -> password;
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $kd_registrasi = Str::random(20);
        $token_registrasi = Str::upper(Str::random(3)."-".Str::random(3)."-".Str::random(3)."-".Str::random(5));
        $waktu = now();
        DB::table('tbl_registrasi_user') -> insert([
            'kd_registrasi' => $kd_registrasi,
            'token_registrasi' => $token_registrasi,
            'email' => $email,
            'password' => $password_hash,
            'tipe' => 'BUYER',
            'status_aktivasi' => 'pending'
        ]);
        
        $dr = ['email' => $email];
        Mail::to('alditha.forum@gmail.com') -> send(new RegistrasiMail($dr));
        return \Response::json($dr);
    }
}
