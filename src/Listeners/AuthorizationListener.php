<?php

namespace Range396\RegListener\Listeners;

class AuthorizationListener
{
    public static function sendWelcomeEmail($to)
    {
        echo "Works, email sent to: " . $to;
    }
}