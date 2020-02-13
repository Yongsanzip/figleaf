<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $user,$subject,$verify_token;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$subject,$verify_token)
    {
        $this->user = $user;
        $this->subject = $subject;
        $this->verify_token    =$verify_token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.resetEmail');
    }
}
