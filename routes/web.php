<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageCtr;
use App\Http\Controllers\RestProduct;
use App\Http\Controllers\ProdukCtr;
use App\Http\Controllers\RegisterCtr;

// Halaman utama 
Route::get('/', [PageCtr::class, 'home']);
Route::get('/login', [PageCtr::class, 'home']);
Route::get('/register', [RegisterCtr::class, 'registerpage']);

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

// Rest 

// Produk detail
Route::get('/product/detail/{id_product}', [RestProduct::class, 'detailproduct']);