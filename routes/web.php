<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);
Route::get('/products', [App\Http\Controllers\WelcomeController::class, 'products']);
Route::get('/products/detail', [App\Http\Controllers\WelcomeController::class, 'productDetail']);
Route::get('/services', function() {
    return view('pages.services.index');
});
Route::get('/news', function() {
    return view('pages.news.index');
});
Route::get('/news/download-center', function() {
    return view('pages.news.download-center');
});

Route::get('/about', function() {
    return view('pages.about.company-profile');
});

Route::prefix('{locale}')
    ->whereIn('locale', ['id', 'en'])
    ->middleware('setLocale')
    ->group(function () {
        Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);
    });
