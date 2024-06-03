<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;

Route::controller(AuthController::class)->prefix('/auth')->name('auth.')->group(function () {
    Route::middleware('guest')->prefix('/steam')->name('steam.')->group(function () {
        Route::get('/redirect', 'steamRedirect')->name('redirect');
        Route::get('/callback', 'steamCallback')->name('callback');
    });

    Route::middleware('auth')->group(function () {
        Route::post('/logout', 'logout')->name('logout');
    });
});
