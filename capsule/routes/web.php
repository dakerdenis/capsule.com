<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Redirect '/' to '/en'
Route::get('/', function () {
    return redirect('/en');
});

Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'en|ru|az']], function () {
    Route::get('/', [PageController::class, 'index'])->name('home');
    Route::get('/catalog', [PageController::class, 'catalog'])->name('catalog');
});


Route::get('/catalog', function () {
    return redirect('/en/catalog');
});
Route::get('/verification', [PageController::class, 'verification'])->name('verification');
Route::get('/warranty', [PageController::class, 'warranty'])->name('warranty');


// Fallback Locale Middleware (optional)
Route::fallback(function () {
    return redirect('/en');
});
