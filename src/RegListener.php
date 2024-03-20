<?php


namespace Range396\RegListener;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Range396\RegListener\Jobs\AuthorizationListener;
use Illuminate\Support\Facades\Log;
use Illuminate\Auth\Events\Registered;

class RegListener
{
    use InteractsWithQueue;

    public $queue = 'emails';

    public function handle($event)
    {
        if (is_array($event)) {
            $user = $event['user'];
//        Log::warning( '=============>', ['data' => $events]);
            dispatch(new AuthorizationListener($user));
        } else {
            dispatch(new AuthorizationListener($event->user));
        }
    }

    public function TestListen()
    {
//        return view('range396:welcome-email');

    }
}