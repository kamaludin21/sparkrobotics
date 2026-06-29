<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// ==========================================
// 1. MAIN ROUTES (ENGLISH / DEFAULT NO PREFIX)
// ==========================================
Route::name('en.')->group(function () {
    Route::get('/', [WelcomeController::class, 'index'])->name('home');
    // Products
    Route::get(trans('routes.products', locale: 'en'), [ProductController::class, 'index'])->name('products.index');
    Route::get(trans('routes.products_detail', locale: 'en'), [ProductController::class, 'show'])->name('products.show');
    // Services
    Route::get(trans('routes.solutions', locale: 'en'), [SolutionController::class, 'index'])->name('solutions.index');
    // News
    Route::get(trans('routes.news', locale: 'en'), [ArticleController::class, 'article'])->name('news.index');
    Route::get(trans('routes.news_category', locale: 'en'), [ArticleController::class, 'articleByCategory'])->name('news.category');
    Route::get(trans('routes.news_detail', locale: 'en'), [ArticleController::class, 'show'])->name('news.detail');
    Route::get(trans('routes.news_download_center', locale: 'en'), [ArticleController::class, 'downloadCenter'])->name('news.download_center');
    // About Us
    Route::get(trans('routes.about_us', locale: 'en'), [AboutUsController::class, 'companyProfile'])->name('about.index');
    Route::get(trans('routes.about_case_study', locale: 'en'), [AboutUsController::class, 'caseStudies'])->name('about.case_study');
    Route::get(trans('routes.about_case_study_detail', locale: 'en'), [AboutUsController::class, 'caseStudy'])->name('about.case_study.detail');
    Route::get(trans('routes.about_contact', locale: 'en'), [AboutUsController::class, 'contact'])->name('about.contact');
});


// ==========================================
// 2. LOCALIZED ROUTES (BAHASA INDONESIA PREFIX)
// ==========================================
Route::prefix('{locale}')
    ->where(['locale' => 'id'])
    ->middleware('setLocale')
    ->name('id.') // Prefix name agar tidak bentrok dengan route EN (contoh: jadi 'id.products.index')
    ->group(function () {
        Route::get('/', [WelcomeController::class, 'index'])->name('home');
        // Produk
        Route::get(trans('routes.products', locale: 'id'), [ProductController::class, 'index'])->name('products.index');
        Route::get(trans('routes.products_detail', locale: 'id'), [ProductController::class, 'show'])->name('products.show');
        // Solusi
        Route::get(trans('routes.solutions', locale: 'id'), [SolutionController::class, 'index'])->name('solutions.index');
        // Berita
        Route::get(trans('routes.news', locale: 'id'), [ArticleController::class, 'article'])->name('news.index');
        Route::get(trans('routes.news_category', locale: 'id'), [ArticleController::class, 'articleByCategory'])->name('news.category');
        Route::get(trans('routes.news_detail', locale: 'id'), [ArticleController::class, 'show'])->name('news.detail');
        Route::get(trans('routes.news_download_center', locale: 'en'), [ArticleController::class, 'downloadCenter'])->name('news.download_center');
        // Tentang Kami
        Route::get(trans('routes.about_us', locale: 'id'), [AboutUsController::class, 'companyProfile'])->name('about.index');
        Route::get(trans('routes.about_case_study', locale: 'id'), [AboutUsController::class, 'caseStudies'])->name('about.case_study');
        Route::get(trans('routes.about_case_study_detail', locale: 'id'), [AboutUsController::class, 'caseStudy'])->name('about.case_study.detail');
        Route::get(trans('routes.about_contact', locale: 'id'), [AboutUsController::class, 'contact'])->name('about.contact');
    });

// Route untuk memproses data submit form (method POST)
Route::post('/submit-contact', [AboutUsController::class, 'submitForm'])
    ->name('contact.submit')
    ->middleware('throttle:3,1'); // 3 requests per 1 minute

// Route::get('/zyel', function () {
//     echo phpinfo();
// });