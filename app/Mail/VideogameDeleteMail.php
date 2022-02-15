<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VideogameDeleteMail extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct()
    {
        //
    }

  
    public function build()
    {
        return $this -> from('admin@gamestop.com')
                     -> text('mail.videogameDelete');
    }
}
