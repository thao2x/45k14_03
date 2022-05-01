<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailKichHoat extends Mailable
{
    use Queueable, SerializesModels;

    public $ho_ten;
    public $hash;
    public $tieu_de;

    public function __construct($ho_ten, $hash, $tieu_de)
    {
        $this->ho_ten  = $ho_ten;
        $this->hash    = $hash;
        $this->tieu_de = $tieu_de;
    }

    public function build()
    {
        return $this->subject($this->tieu_de)->view('mail.mail_kich_hoat', [
            'ho_ten'    => $this->ho_ten,
            'hash'      => $this->hash,
        ]);
    }
}
