<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::inertia('/', 'Auth/Login')->name('auth.login');
        Route::post('/', [\App\Http\Controllers\Auth\LoginController::class, 'store'])->name('auth.login');

        Route::prefix('/register')->group(function () {
            Route::inertia('/', 'Auth/Register')->name('auth.register');
            Route::post('/', [\App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('auth.register');
        });
    });

    Route::middleware(['auth'])->group(function () {
        Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('auth.logout');
    });
});

