<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return redirect('/en');
});
Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'en|de']], function () {
    Route::get('/', [PageController::class, 'index'])->name('home');
    Route::get('/catalog', [PageController::class, 'catalog'])->name('catalog');
});
Route::get('/catalog', fn() => redirect('/en/catalog'));