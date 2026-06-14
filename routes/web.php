<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);
Route::get('/products', [App\Http\Controllers\WelcomeController::class, 'products']);
Route::get('/products/detail', [App\Http\Controllers\WelcomeController::class, 'productDetail']);

Route::prefix('{locale}')
    ->whereIn('locale', ['id', 'en'])
    ->middleware('setLocale')
    ->group(function () {
        Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);
    });
