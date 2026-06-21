<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// ==========================================
// 1. MAIN ROUTES (ENGLISH / DEFAULT NO PREFIX)
// ==========================================
Route::name('en.')->group(function () {

    Route::get('/', [WelcomeController::class, 'index'])->name('home');

    // Products
    Route::get(trans('routes.products', [], 'en'), [WelcomeController::class, 'products'])->name('products.index');
    Route::get(trans('routes.products_detail', [], 'en'), [WelcomeController::class, 'productDetail'])->name('products.detail');

    // Services
    Route::get(trans('routes.services', [], 'en'), function () {
        return view('pages.services.index');
    })->name('services.index');

    // News
    Route::get(trans('routes.news', [], 'en'), function () {
        return view('pages.news.index');
    })->name('news.index');

    Route::get(trans('routes.news_blog', [], 'en'), function () {
        return view('pages.news.blog');
    })->name('news.blog');

    Route::get(trans('routes.news_download_center', [], 'en'), function () {
        return view('pages.news.download-center');
    })->name('news.download_center');

    Route::get(trans('routes.news_detail', [], 'en'), function () {
        return view('pages.news.slug');
    })->name('news.detail');

    // About Us
    Route::get(trans('routes.about_us', [], 'en'), function () {
        return view('pages.about.company-profile');
    })->name('about.index');

    Route::get(trans('routes.about_case_study', [], 'en'), function () {
        return view('pages.about.case-studies');
    })->name('about.case_study');

    Route::get(trans('routes.about_case_study_detail', [], 'en'), function () {
        return view('pages.about.case-study');
    })->name('about.case_study.detail');

    Route::get(trans('routes.about_contact', [], 'en'), function () {
        return view('pages.about.contact');
    })->name('about.contact');
});


// ==========================================
// 2. LOCALIZED ROUTES (BAHASA INDONESIA PREFIX)
// ==========================================
Route::prefix('{locale}')
    ->whereIn('locale', ['id'])
    ->middleware('setLocale')
    ->name('id.') // Prefix name agar tidak bentrok dengan route EN (contoh: jadi 'id.products.index')
    ->group(function () {

        Route::get('/', [WelcomeController::class, 'index'])->name('home');

        // Produk
        Route::get(trans('routes.products', [], 'id'), [WelcomeController::class, 'products'])->name('products.index');
        Route::get(trans('routes.products_detail', [], 'id'), [WelcomeController::class, 'productDetail'])->name('products.detail');

        // Solusi
        Route::get(trans('routes.services', [], 'id'), function () {
            return view('pages.services.index');
        })->name('services.index');

        // Berita
        Route::get(trans('routes.news', [], 'id'), function () {
            return view('pages.news.index');
        })->name('news.index');

        Route::get(trans('routes.news_blog', [], 'id'), function () {
            return view('pages.news.blog');
        })->name('news.blog');

        Route::get(trans('routes.news_download_center', [], 'id'), function () {
            return view('pages.news.download-center');
        })->name('news.download_center');

        Route::get(trans('routes.news_detail', [], 'id'), function () {
            return view('pages.news.slug');
        })->name('news.detail');

        // Tentang Kami
        Route::get(trans('routes.about_us', [], 'id'), function () {
            return view('pages.about.company-profile');
        })->name('about.index');

        Route::get(trans('routes.about_case_study', [], 'id'), function () {
            return view('pages.about.case-studies');
        })->name('about.case_study');

        Route::get(trans('routes.about_case_study_detail', [], 'id'), function () {
            return view('pages.about.case-study');
        })->name('about.case_study.detail');

        Route::get(trans('routes.about_contact', [], 'id'), function () {
            return view('pages.about.contact');
        })->name('about.contact');
    });
