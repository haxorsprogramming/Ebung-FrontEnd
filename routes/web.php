<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageCtr;
use App\Http\Controllers\RestProduct;
use App\Http\Controllers\ProductCtr;
use App\Http\Controllers\RegisterCtr;
use App\Http\Controllers\TestingCtr;
use App\Http\Controllers\WithdrawCtr;
use App\Http\Controllers\LoginCtr;
use App\Http\Controllers\DashboardCtr;
use App\Http\Controllers\CustomerCtr;
use App\Http\Controllers\SellerCtr;
use App\Http\Controllers\DaerahCtr;
use App\Http\Controllers\ProductSellerCtr;
use App\Http\Controllers\HelperCtr;

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

// Product list 
Route::get('/product/all', [ProductCtr::class, 'productall']);
Route::get('/product/{id_product}/details', [ProductCtr::class, 'productdetails']);
Route::get('/product/kategory/{id_kategori}', [ProductCtr::class, 'productkategory']);

// Customer (Buyer)
Route::get('/account', [DashboardCtr::class, 'dashboard']);
Route::get('/account/dashboard', [CustomerCtr::class, 'dashboard']);
// Seller
Route::get('/account/seller', [DashboardCtr::class, 'sellerdashboard']);
Route::get('/account/seller/dashboard', [SellerCtr::class, 'sellerdashboard']);
Route::get('/account/seller/sellerbranch', [SellerCtr::class, 'sellerbranch']);
Route::get('/account/seller/sellerbranch/coverage-area', [SellerCtr::class, 'coverageareabranch']);
// Cek lokasi branch 
Route::get('/account/seller/sellerbranch/cek-branch-location/{idBranch}', [SellerCtr::class, 'cekbranchlocation']);
Route::post('/account-seller/apply-new-branch', [SellerCtr::class, 'applynewbranch']);
Route::get('/account-seller/detail-branch/{id_branch}', [SellerCtr::class, 'detailbranch']);
// Save coverage area 
Route::post('/account/seller/save-coverage-area', [SellerCtr::class, 'savecoveragearea']);
// Cek nama kecamatan & kelurahan dari id kel 
Route::get('/account/seller/get-data-kelurahan-for-marker/{id_kelurahan}', [SellerCtr::class, 'getdatakelurahanformarker']);

Route::get('/account-seller/product-list', [ProductSellerCtr::class, 'productlist']);
Route::post('/account-seller/product/add/proses', [ProductSellerCtr::class, 'addproductproses']);
// Logout
Route::get('/logout', [PageCtr::class, 'logout']);

// Pembelian
Route::get('/pembelian', [PageCtr::class, 'listproduk']);

// About
Route::get('/contact', [PageCtr::class, 'contact']);

// Cek coverage area product
Route::post('/product/checkarea', [ProductCtr::class, 'checkarea']);
// Halaman admin

// ResT Produk detail
Route::get('/product/detail/{id_product}', [RestProduct::class, 'detailproduct']);

// Testing kirim email
Route::get('/tes-kirim-email', [PageCtr::class, 'teskirimemail']);

// Cek view mail registrasi
Route::get('/cek-view-email-registrasi', [TestingCtr::class, 'viewemailregistrasi']);

// ResT daerah 
Route::get('/get-provinsi-all', [DaerahCtr::class, 'getProvinsiAll']);
Route::get('/get-kabupaten/{id_provinsi}', [DaerahCtr::class, 'getKabupaten']);
Route::get('/get-kecamatan/{id_kabupaten}', [DaerahCtr::class, 'getKecamatan']);
Route::get('/get-kelurahan/{id_kecamatan}', [DaerahCtr::class, 'getKelurahan']);

// ResT sub-kategori
Route::get('/get-sub-kategori/{id_kategori}', [HelperCtr::class, 'getsubkategori']);