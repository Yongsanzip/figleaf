<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $user,$subject,$token;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$subject,$token) {
        $this->user    = $user;
        $this->subject = $subject;
        $this->token   = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.resetPassword');
    }
}
