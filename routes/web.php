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

// Produk 
Route::get('/produk/list',[PageCtr::class, 'produk']);
Route::get('/produk/{tipeproduk}/list', [PageCtr::class, 'listproduk']);
// Pembelian 
Route::get('/pembelian',[PageCtr::class, 'listproduk']);