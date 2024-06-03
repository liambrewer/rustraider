<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('/app')->name('app.')->group(function () {
    Route::get('/', fn () => view('app.index'))->name('index');
});
