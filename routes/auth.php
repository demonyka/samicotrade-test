<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::inertia('/', 'Auth/Login')->name('auth.login');
    });
});

