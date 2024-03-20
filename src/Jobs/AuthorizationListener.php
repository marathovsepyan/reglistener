<?php

namespace Range396\RegListener\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Range396\Mailing\RegMailSending;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;

class AuthorizationListener implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;

    public function __construct($data)
    {
        $final = null;
        if(is_array($data))
            $final = json_encode($data);
        else
            $final = $data;

        $this->data = $final;

    }

    public function handle()
    {
        // Logic to send the email
        Mail::to($this->data->email)
            ->send(new RegMailSending($this->data));
    }
}