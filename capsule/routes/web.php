<?php
// Admin Dashboard Route (Protected by Middleware)

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WarrantyDocumentController;



    Route::get('/', function () {
        return redirect('/en');
    });

    Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'en|de']], function () {
        Route::get('/', [PageController::class, 'index'])->name('home');
        Route::get('/catalog', [PageController::class, 'catalog'])->name('catalog');
    });

    Route::get('/catalog', fn() => redirect('/en/catalog'));
    Route::get('/verification', [PageController::class, 'verification'])->name('verification');
    // Warranty System Routes
    Route::get('/warranty', [PageController::class, 'warranty'])->name('warranty');
    Route::post('/warranty/login', [AuthController::class, 'handleLogin'])->name('warranty.login');

    Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
    

        Route::get('/warranty/register', [PageController::class, 'registerWarranty'])->name('warranty.register');
        Route::get('/warranty/document', [PageController::class, 'warrantyDocument'])->name('warranty.document');
        Route::post('/warranty/document', [WarrantyDocumentController::class, 'uploadDocument'])->name('upload.document');
        Route::get('/warranty/document/{id}', [WarrantyDocumentController::class, 'show'])->name('show.document');

    