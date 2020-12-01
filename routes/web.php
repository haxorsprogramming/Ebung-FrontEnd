<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageCtr;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Halaman utama 
Route::get('/', [PageCtr::class, 'home']);
Route::get('/{id_produk}', [PageCtr::class, 'listproduk']);
Route::get('/login', [PageCtr::class, 'home']);

// Customer 
Route::get('/customer/profile', [PageCtr::class, 'listproduk']);
Route::get('/customer/update-profile', [PageCtr::class, 'listproduk']);
// Seller 
Route::get('/seller/profile', [PageCtr::class, 'listproduk']);
Route::get('/seller/update-profile',[PageCtr::class, 'listproduk']);

// Produk 
Route::get('/produk/list', [PageCtr::class, 'produk']);
Route::get('/produk/{tipeproduk}/list', [PageCtr::class, 'listproduk']);

// Pembelian 
Route::get('/pembelian', [PageCtr::class, 'listproduk']);