<?php

use Illuminate\Support\Facades\Route;

Route::get('test', function(Range396\RegListener\RegListener $listen) {
    return $listen->TestListen();
});