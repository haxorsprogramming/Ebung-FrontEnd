<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_customer', function (Blueprint $table) {
            $table -> id();
            $table -> char('email', 100);
            $table -> char('full_name', 100);
            $table -> char('phone', 30);
            $table -> date('birth_date');
            $table -> char('gender', 20);
            $table -> text('alamat');
            $table -> char('kelurahan', 10);
            $table -> char('kecamatan', 10);
            $table -> char('kabupaten', 10);
            $table -> char('provinsi', 10);
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
        Schema::dropIfExists('tbl_customer');
    }
}
