<?php

use App\Http\Middleware\WebConfig;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter;

Route::prefix(LaravelLocalization::setLocale())->middleware([LaravelLocalizationRedirectFilter::class, WebConfig::class])->name('fresns.')->group(function () {
    // Home
    Route::get('/', function () {
        // return view('index');
        return redirect()->to(route('fresns.customer-community'));
    })->name('home');

    // Customer Community Software
    Route::get('customer-community', function () {
        return view('customer-community.index');
    })->name('customer-community');
});
