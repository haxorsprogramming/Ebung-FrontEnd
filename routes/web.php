<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageCtr;
use App\Http\Controllers\RestProduct;
use App\Http\Controllers\ProdukCtr;
use App\Http\Controllers\RegisterCtr;
use App\Http\Controllers\TestingCtr;
use App\Http\Controllers\WithdrawCtr;
use App\Http\Controllers\CustomerCtr;
use App\Http\Controllers\LoginCtr;

// Halaman utama 
Route::get('/', [PageCtr::class, 'home']);
// Login page 
Route::get('/login', [LoginCtr::class, 'loginpage']);
// Login proses 
Route::post('/login/proses', [LoginCtr::class, 'loginproses']);
// Register page 
Route::get('/register', [RegisterCtr::class, 'registerpage']);
// Register with referral 
Route::get('/register/ref/{referral_id}', [RegisterCtr::class, 'registerwithreferral']);
// Register proses
Route::post('/register/proses', [RegisterCtr::class, 'registerproses']);
// Aktivasi akun link
Route::get('/aktivasi-akun/{kodeaktivasi}', [RegisterCtr::class, 'aktivasiakun']);

// Aktivasi akun proses 

// Customer 
Route::get('/customer/profile', [PageCtr::class, 'listproduk']);
Route::get('/customer/update-profile', [PageCtr::class, 'listproduk']);

// Seller 
Route::get('/seller/profile', [PageCtr::class, 'listproduk']);
Route::get('/seller/update-profile',[PageCtr::class, 'listproduk']);

// Produk 
Route::get('/produk/list', [PageCtr::class, 'produk']);
Route::get('/product/details/{id_product}', [ProdukCtr::class, 'detailproduct']);

// Pembelian 
Route::get('/pembelian', [PageCtr::class, 'listproduk']);

// About 
Route::get('/contact', [PageCtr::class, 'contact']);

// Coverage area 
Route::post('/product/checkarea', [ProdukCtr::class, 'checkarea']);

// Halaman admin 
    
// ResT Produk detail
Route::get('/product/detail/{id_product}', [RestProduct::class, 'detailproduct']);

// Testing kirim email
Route::get('/tes-kirim-email', [PageCtr::class, 'teskirimemail']);

// Cek view mail registrasi 
Route::get('/cek-view-email-registrasi', [TestingCtr::class, 'viewemailregistrasi']);