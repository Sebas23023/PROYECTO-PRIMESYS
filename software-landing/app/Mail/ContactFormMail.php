<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Aquí guardamos nombre, email y mensaje

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Nuevo Contacto desde Web PRIMESYS')
                    ->from('sebasarias144@gmail.com', 'Web Primesys') // Remitente
                    ->replyTo($this->data['email'], $this->data['name']) // Para que al responder, le respondas al cliente
                    ->view('emails.contact');
    }
}