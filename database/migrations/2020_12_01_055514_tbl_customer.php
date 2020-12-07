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
            $table -> date('birth_date') -> nullable();
            $table -> char('gender', 20) -> nullable();
            $table -> text('alamat') -> nullable();
            $table -> char('kelurahan', 10) -> nullable();
            $table -> char('kecamatan', 10) -> nullable();
            $table -> char('kabupaten', 10) -> nullable();
            $table -> char('provinsi', 10) -> nullable();
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
