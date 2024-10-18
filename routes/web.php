<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::inertia('/', 'Home')->name('home');

    Route::prefix('/products')->group(function () {
        Route::get('/list', [\App\Http\Controllers\Products\ProductsController::class, 'list'])->name('products.list');
    });
});

require __DIR__.'/auth.php';
