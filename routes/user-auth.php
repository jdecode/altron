<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::view('register', 'layouts.flux')
        ->name('register');
});
