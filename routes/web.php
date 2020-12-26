<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Helper\Helper;
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
use App\Http\Controllers\BranchSellerCtr;


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
/**
 * Activation account
 */
Route::get('/aktivasi-akun/{kodeaktivasi}', [RegisterCtr::class, 'aktivasiakun']);
 
/**
 * Product prefix
 * product/kat-all/area-all/tipe-all
 */
Route::get('/product/{kategory}/{area}', [ProductCtr::class, 'productview']);
Route::get('/product', [ProductCtr::class, 'all']);
Route::get('/product/{id_product}', [ProductCtr::class, 'productdetails']);

/**
 * Customer (Buyer)
 */
Route::get('/account', [DashboardCtr::class, 'dashboard']);
Route::get('/account/dashboard', [CustomerCtr::class, 'dashboard']);
// Seller
Route::get('/account/seller', [DashboardCtr::class, 'sellerdashboard']);
Route::get('/account/seller/dashboard', [SellerCtr::class, 'sellerdashboard']);
Route::get('/account/seller/branch', [SellerCtr::class, 'sellerbranch']);

/**
 * Branch routing
 */
Route::get('/account/seller/branch/coverage-area', [BranchSellerCtr::class, 'coverageareabranch']);
Route::get('/account/seller/branch/cek-branch-location/{idBranch}', [BranchSellerCtr::class, 'cekbranchlocation']);
Route::get('/account/seller/branch/detail/{id_branch}', [BranchSellerCtr::class, 'detailbranch']);
Route::get('/account/seller/branch/get-data-kelurahan-for-marker/{id_kelurahan}', [BranchSellerCtr::class, 'getdatakelurahanformarker']);
Route::get('/account/seller/branch/get-branch-coverage-area/{id_branch}', [BranchSellerCtr::class, 'getbranchcoveragearea']);
Route::post('/account/seller/branch/apply-new-branch', [BranchSellerCtr::class, 'applynewbranch']);
Route::post('/account/seller/branch/save-coverage-area', [BranchSellerCtr::class, 'savecoveragearea']);

/**
 * Product management (Seller)
 */
Route::get('/account/seller/product/list', [ProductSellerCtr::class, 'productlist']);
Route::post('/account/seller/product/add/variant', [ProductSellerCtr::class, 'addvariantproduct']);
Route::post('/account/seller/product/add/main-product', [ProductSellerCtr::class, 'addmainproduct']);

// Logout
Route::get('/logout', [PageCtr::class, 'logout']);


/**
 * Contact page
 */
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

// Testing kirim email
Route::get('/tes-kirim-email', [PageCtr::class, 'teskirimemail']);

// Cek view mail registrasi
Route::get('/cek-view-email-registrasi', [TestingCtr::class, 'viewemailregistrasi']);

/**
 * REST Without csrf
 */
Route::get('/get/location/provinsi-all', [DaerahCtr::class, 'getProvinsiAll']);
Route::get('/get/location/kabupaten/{id_provinsi}', [DaerahCtr::class, 'getKabupaten']);
Route::get('/get/location/kecamatan/{id_kabupaten}', [DaerahCtr::class, 'getKecamatan']);
Route::get('/get/location/kelurahan/{id_kecamatan}', [DaerahCtr::class, 'getKelurahan']);
Route::get('/get/sub-kategori/{id_kategori}', [HelperCtr::class, 'getsubkategori']);
