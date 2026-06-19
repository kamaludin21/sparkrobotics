<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);
Route::get('/products', [App\Http\Controllers\WelcomeController::class, 'products']);
Route::get('/products/detail', [App\Http\Controllers\WelcomeController::class, 'productDetail']);
Route::get('/services', function() {
    return view('pages.services.index');
});

// News
Route::get('/news', function() {
    return view('pages.news.index');
});
Route::get('/news/blog', function() {
    return view('pages.news.blog');
});
Route::get('/news/download-center', function() {
    return view('pages.news.download-center');
});
Route::get('/news/detail', function() {
    return view('pages.news.slug');
});

Route::get('/about-us', function() {
    return view('pages.about.company-profile');
});
Route::get('/about-us/case-study', function() {
    return view('pages.about.case-studies');
});
Route::get('/about-us/case-study', function() {
    return view('pages.about.case-studies');
});
Route::get('/about-us/case-study/detail', function() {
    return view('pages.about.case-study');
});
Route::get('/about-us/contact', function() {
    return view('pages.about.contact');
});

Route::prefix('{locale}')
    ->whereIn('locale', ['id', 'en'])
    ->middleware('setLocale')
    ->group(function () {
        Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);
    });
