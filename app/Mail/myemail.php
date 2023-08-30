<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class myemail extends Mailable
{
    public $name;
    public $phone_number;
    public $job;
    public $email;
    public $city;

    public function __construct($name, $phone_number,$job, $email, $city )
    {
        $this->name = $name;
        $this->phone_number = $phone_number;
        $this->job = $job;
        $this->email = $email;
        $this->city = $city;


    }

    public function build()
    {
        return $this->from('noreply@example.com', 'Your Application Name')
            ->subject('you have a mail from '.$this->name)
            ->view('email') // Specify the view name here
            ->with([
                'name'  => $this->name,
                'phone_number' => $this->phone_number,
                'job'   => $this->job,
                'email'   => $this->email,
                'city'   => $this->city,

            ]);
    }
}
