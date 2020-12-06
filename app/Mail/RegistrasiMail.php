<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrasiMail extends Mailable
{
    use Queueable, SerializesModels;
    public $dr;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dr)
    {
        $this -> dr = $dr;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $nama = $this -> dr['nama'];
        return $this->from('addydr@ebunga.co.id') -> view('layout_email.mail_registrasi_view') -> with(['nama' => $nama, 'website' => 'ebunga.co.id']);
    }
}
