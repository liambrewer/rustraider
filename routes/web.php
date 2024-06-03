<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', fn () => view('home'))->name('home');
});

require 'app.php';
require 'auth.php';
