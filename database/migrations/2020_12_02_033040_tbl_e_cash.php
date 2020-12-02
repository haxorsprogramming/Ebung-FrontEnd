<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblECash extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_e_cash', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_e_cash', 20);
            $table -> char('user', 100);
            $table -> char('token_verify', 100);
            $table -> char('next_token_verify');
            $table -> integer('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_e_cash');
    }
}
