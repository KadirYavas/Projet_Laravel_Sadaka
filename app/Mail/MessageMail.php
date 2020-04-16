<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageMail extends Mailable
{
    use Queueable, SerializesModels;
    public $nom;
    public $mail;
    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $message)
    {
        $this->nom = $name;
        $this->mail = $email;
        $this->msg = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mkdir@hotmail.com')->subject("Message d'un utilisateur")->view('mail', compact('nom', 'mail', 'msg'));
    }
}
