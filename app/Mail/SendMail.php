<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $token;
   // public $url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(/*$url,*/$token)
    {
        $this->token = $token;
//        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('Email.forgotPassword')->with([/*'url' => $this->url ,*/'token' => $this->token]);
    }
}
