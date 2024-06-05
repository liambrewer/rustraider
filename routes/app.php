<?php

use App\Http\Controllers\App\GroupController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\App\HomeController;

Route::middleware('auth')->prefix('/app')->name('app.')->group(function () {
    Route::get('/', HomeController::class)->name('home');

    Route::controller(GroupController::class)->prefix('/groups')->name('groups.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');

        Route::get('/create', 'create')->name('create');

        Route::get('/{group}', 'show')->name('show');
    });
});
