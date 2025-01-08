<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// Redirect '/' to '/en'
Route::get('/', function () {
    return redirect('/en');
});

Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'en|de']], function () {
    Route::get('/', [PageController::class, 'index'])->name('home');
    Route::get('/catalog', [PageController::class, 'catalog'])->name('catalog');
});

Route::get('/catalog', function () {
    return redirect('/en/catalog');
});




///Verification for client
Route::get('/verification', [PageController::class, 'verification'])->name('verification');

///warranty from service center
Route::get('/warranty', [PageController::class, 'warranty'])->name('warranty');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('login');
Route::get('/warranty/register', [PageController::class, 'registerWarranty'])->name('warranty.register');
Route::get('/warranty/document', [PageController::class, 'warrantyDocument'])->name('warranty.document');


//ADMIN routes
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::get('/admin', [AdminController::class, 'showAdminPage'])->name('admin.dashboard');




// Fallback Locale Middleware (optional)
Route::fallback(function () {
    return redirect('/en');
});
