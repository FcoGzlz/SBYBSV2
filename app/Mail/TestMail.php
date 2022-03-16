<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('test.mail_test')
        ->subject("Prueba envío de correos con archivo adjunto desde laravel desde Laravel")
        ->attach('../storage/archivos/Reporte 3.pdf',
    [
        'as' => 'Reporte 3.pdf',
    ]
    );
    }
}
