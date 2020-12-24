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
use Symfony\Component\Console\Helper\Helper;

/**
 * Main page
 */
Route::get('/', [PageCtr::class, 'home']);
/**
 * Login page
 */
Route::get('/login', [LoginCtr::class, 'loginpage']);
/**
 * Login process
 */
Route::post('/login/proses', [LoginCtr::class, 'loginproses']);
/**
 * Register page
 */
Route::get('/register', [RegisterCtr::class, 'registerpage']);
/**
 * Register page (with referral)
 */
Route::get('/register/ref/{referral_id}', [RegisterCtr::class, 'registerwithreferral']);
/**
 * Register proses
 */
Route::post('/register/proses', [RegisterCtr::class, 'registerproses']);
// Aktivasi akun link
Route::get('/aktivasi-akun/{kodeaktivasi}', [RegisterCtr::class, 'aktivasiakun']);
 
/**
 * Product prefix
 * product/kat-all/area-all/tipe-all
 */
Route::get('/product/{kategory}/{area}', [ProductCtr::class, 'productview']);
Route::get('/product', [ProductCtr::class, 'all']);
Route::get('/product/{id_product}', [ProductCtr::class, 'productdetails']);
// Route::get('/product/kategory/{id_kategori}', [ProductCtr::class, 'productkategory']);
// Route::get('/product/{id_product}/details', [ProductCtr::class, 'productdetails']);

// Route::get('/product')


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
/**
 * Product Seller
 */
Route::get('/account-seller/product-list', [ProductSellerCtr::class, 'productlist']);
Route::post('/account-seller/product/add/main-product', [ProductSellerCtr::class, 'addmainproduct']);
// Logout
Route::get('/logout', [PageCtr::class, 'logout']);

// Pembelian
Route::get('/pembelian', [PageCtr::class, 'listproduk']);

// About
Route::get('/contact', [PageCtr::class, 'contact']);

/**
 * Cek coverage area with slug & kd produk
 */
Route::post('/product/checkarea', [ProductCtr::class, 'checkarea']);
/**
 * Cek area only slug
 */
Route::post('/product/check-area-slug-only', [ProductCtr::class, 'checkslugonly']);

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


/**
 * Tes upload s3
 */
Route::post('/tes-s3', [HelperCtr::class, 'tesuploads3']);