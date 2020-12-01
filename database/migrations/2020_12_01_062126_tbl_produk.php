<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_produk', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_produk', 5);
            $table -> char('nama_produk', 100);
            $table -> text('deks_produk');
            $table -> char('kategori', 100);
            $table -> integer('harga');
            $table -> integer('stok');
            $table -> char('foto_utama', 100);
            $table -> char('active', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_produk');
    }
}
