<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Redirect '/' to '/en'
Route::get('/', function () {
    return redirect('/en');
});

// Multilingual Routes
Route::group(['prefix' => '{locale}'], function () {
    Route::get('/', [PageController::class, 'index'])->name('home');
    Route::get('/catalog', [PageController::class, 'catalog'])->name('catalog');
});

// Fallback Locale Middleware (optional)
Route::fallback(function () {
    return redirect('/en');
});
