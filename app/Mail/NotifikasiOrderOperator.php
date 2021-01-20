<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Models\OrderProdukMdl;
use App\Models\OrderProdukDetailsMdl;

class NotifikasiOrderOperator extends Mailable
{
    use Queueable, SerializesModels;
    public $dre;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dre)
    {
        $this -> dre = $dre;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $kdOrder = $this -> dre['kdOrder'];;
        $dataOrder = OrderProdukMdl::where('kd_order', $kdOrder) -> first();
        $orderDetails = OrderProdukDetailsMdl::where('kd_order', $kdOrder) -> first();
        
        $dr = ['kdOrder' => $kdOrder, 'dataOrder' => $dataOrder, 'orderDetails' => $orderDetails];
        return $this -> from('addydr@ebunga.co.id') -> view('layout_email.notif_new_order') -> subject("New Order") -> with($dr);
    }
}
