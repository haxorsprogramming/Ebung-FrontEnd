<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Mail\NotifikasiOrderOperator;

class AdminOrderCtr extends Controller
{
    public function verifypayment(Request $request)
    {
        $kdOrder = $request -> kdOrder;
        DB::table('tbl_order_details') -> where('kd_order', $kdOrder) -> update(['status_payment' => 'success', 'status_order' => 'MENUNGGU_KONFIRMASI_SELLER', 'status_approve' => 'y']);
        /**
         * Kirim email notifikasi order ke seller
         */

        echo 'sukses';
    }
}
