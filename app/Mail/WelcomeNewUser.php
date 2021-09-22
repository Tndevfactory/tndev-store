<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeNewUser extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    // public $url;
     /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
        // $this->url = 'http://127.0.0.1:8000/'.$this->data['language'].'/reset-password?token='.$this->data['token'];
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject($this->data['subject'])
            //->attach(public_path('img/logo/icons8-shop-64.png'))
            ->markdown('mail.welcome-mail');
    }
}
