<?php

namespace App\Mail\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserCredentials extends Mailable
{
    use Queueable, SerializesModels;

    protected $fullName;
    protected $username;
    protected $password;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullName, $username, $password)
    {
        $this->fullName = $fullName;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('user.mail.credentialsMail', [
            'fullName' => $this->fullName,
            'username' => $this->username,
            'password' => $this->password
        ]);
    }
}
