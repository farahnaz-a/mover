<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MoverInformation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name = '';
    public $email = '';
    public $company = '';
    public $phone = '';
    public $address = '';
    public function __construct($name, $email, $company, $phone, $address)
    {
        $this->name = $name;
        $this->email = $email;
        $this->company = $company;
        $this->phone = $phone;
        $this->address = $address;
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
        return $this->markdown('mail.moverinfo', compact('name', 'email', 'phone', 'address', 'company'));
    }
}
