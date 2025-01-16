<?php
// Admin Dashboard Route (Protected by Middleware)
use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WarrantyDocumentController;
use Intervention\Image\Facades\Image;

use App\Http\Middleware\ServiceAuth;

Route::middleware(['web'])->group(function () {
    // Public Routes
    Route::get('/', function () {
        return redirect('/en');
    });

    Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'en|de']], function () {
        Route::get('/', [PageController::class, 'index'])->name('home');
        Route::get('/catalog', [PageController::class, 'catalog'])->name('catalog');
    });

    Route::get('/catalog', fn() => redirect('/en/catalog'));

    // Warranty System Routes
    Route::get('/warranty', [PageController::class, 'warranty'])->name('warranty');
    Route::post('/warranty/login', [AuthController::class, 'handleLogin'])->name('warranty.login');

    Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
    Route::middleware(['admin.auth'])->group(function () {
        Route::get('/admin', [AdminController::class, 'showAdminPage'])->name('admin.dashboard');
        Route::get('/admin/products', [AdminController::class, 'adminProducts'])->name('admin.products');
        Route::get('/admin/services', [AdminController::class, 'adminServices'])->name('admin.services');
        Route::get('/admin/services/{id}', [AdminController::class, 'adminSingleService'])->name('admin.service');
        Route::get('/admin/warranties', [AdminController::class, 'adminWarranties'])->name('admin.warranties');
        Route::get('/admin/warranties/{id}', [AdminController::class, 'adminSingleWarranty'])->name('admin.warranty');
    });
    
    Route::middleware(['service.auth'])->group(function () {
        Route::get('/warranty/register', [PageController::class, 'registerWarranty'])->name('warranty.register');
        Route::get('/warranty/document', [PageController::class, 'warrantyDocument'])->name('warranty.document');
        Route::post('/warranty/document', [WarrantyDocumentController::class, 'uploadDocument'])->name('upload.document');
        Route::get('/warranty/document/{id}', [WarrantyDocumentController::class, 'show'])->name('show.document');
    });
    
});
