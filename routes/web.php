<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);

Route::prefix('{locale}')
    ->whereIn('locale', ['id', 'en'])
    ->middleware('setLocale')
    ->group(function () {
        Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);
    });
