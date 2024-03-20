<?php

namespace Range396\Mailing;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;

class RegMailSending extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('range396::welcome-email')
            ->subject('Welcome to YourApp')->with(["data" => $this->data]);
    }

}