<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordResetMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $token;
    protected $first_name;
    protected $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($token, $first_name, $email)
    {
        $this->token = $token;
        $this->first_name = $first_name;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->email;
        $token = $this->token;
        $first_name = $this->first_name;

        return $this->view('emails.reset_password_mail', ['email' => $email, 'token' => $token, 'first_name' => $first_name])->to($email);
    }
}
