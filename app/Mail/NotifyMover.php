<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyMover extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name = '';
    public $email = '';
    public $phone = '';
    public function __construct($name, $email, $phone)
    {
        $this->name = $name; 
        $this->email = $email; 
        $this->phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = '';
        $email = ''; 
        $company = ''; 
        $phone = ''; 
        $address  = '';
        return $this->subject('Congratulation !! Your bid was accepted.')->markdown('mail.notifymover', compact('name', 'email', 'phone'));
    }
}
