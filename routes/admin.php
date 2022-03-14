<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->group(function () {
    Route::get('login', [Auth\AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [Auth\AuthenticatedSessionController::class, 'store']);


});
Route::post('test', [Auth\AuthenticatedSessionController::class, 'destroy'])->name('test');

Route::middleware('auth:admin')->group(function () {
    Route::post('logout', [Auth\AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});


Route::get('/', HomeController::class)->name('home');
