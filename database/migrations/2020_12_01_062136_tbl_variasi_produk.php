<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblVariasiProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_variasi_produk', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_sub_produk', 10);
            $table -> char('nama_sub_produk', 100);
            $table -> text('deks_sub_produk');
            $table -> char('kd_produk', 100);
            $table -> char('foto', 100);
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
        Schema::dropIfExists('tbl_variasi_produk');
    }
}
