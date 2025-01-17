<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WarrantyController;

//! MAIN PAGE ROUTES + CATALOG
//*************************** */
//*************************** */
Route::get('/', function () {
    return redirect('/en');
});
Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'en|de']], function () {
    Route::get('/', [PageController::class, 'index'])->name('home');
    Route::get('/catalog', [PageController::class, 'catalog'])->name('catalog');
});
Route::get('/catalog', fn() => redirect('/en/catalog'));
//*************************** */
//*************************** */




//!Verification Page for all users -> need to add maximum values of attempts per minute.
//*************************** */
//*************************** */
Route::get('/verification', [PageController::class, 'verification'])->name('verification');
//*************************** */
//*************************** */


//!Admin page
//*************************** */
//*************************** */
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
//*************************** */
//*************************** */




//* Admin authenticated MIddleware (ONLY AUTHORIZED ADMIN CAN ACCESS)
Route::middleware('auth_admin')->group(function () {
    //dashboard admin page - admin panel only could be accessed by authenticated adminstrators
    Route::get('/admin', [AdminController::class, 'showAdminPage'])->name('admin.dashboard');
    //PRODUCTS + SERVICES + WARANTIES
    Route::prefix('admin')->group(function () {
        //*PRODUCTS
        Route::get('/products', [AdminController::class, 'adminProducts'])->name('admin.products');
        Route::prefix('products')->group(function () {
            Route::get('/add', [AdminController::class, 'adminProductAdd'])->name('admin.add_product');
            Route::post('/add', [AdminController::class, 'adminPostProductAdd'])->name('admin.add_post_product');
            Route::delete('/delete/{id}', [AdminController::class, 'adminDeleteProduct'])->name('admin.delete_product');
        });
        //* SERVICES
        Route::get('/services', [AdminController::class, 'adminServices'])->name('admin.services');
        Route::prefix('services')->group(function () {
            Route::get('/{id}', [AdminController::class, 'adminSingleService'])->name('admin.service');
            Route::get('/{id}/edit', [AdminController::class, 'adminEditService'])->name('admin.edit_service');
            Route::post('/{id}/edit', [AdminController::class, 'adminPostEditService'])->name('admin.edit_post_service');
            Route::delete('/{id}', [AdminController::class, 'adminDeleteService'])->name('admin.delete_service');
            Route::get('/add', [AdminController::class, 'adminNewService'])->name('admin.new_service');
            Route::post('/add', [AdminController::class, 'adminPostNewService'])->name('admin.new_post_service');
        });
        //* WARRANTIES
        Route::get('/warranties', [AdminController::class, 'adminWarranties'])->name('admin.warranties');
        Route::prefix('warranties')->group(function () {
            Route::get('/{id}', [AdminController::class, 'adminSingleWarranty'])->name('admin.warranty');
            Route::get('/{id}/edit', [AdminController::class, 'adminSingleWarranty'])->name('admin.edit_warranty');
            Route::post('/{id}', [AdminController::class, 'adminEditPostWarranty'])->name('admin.edit_post_warranty');
        });
    });
});

Route::get('/warranty', [WarrantyController::class, 'warrantyPage'])->name('service.login');
Route::middleware('auth_service')->group(function () {});


// Warranty System Routes



//Login page for basic users
Route::get('/warranty', function () {
    return 'USer login page';
})->name('user.login');
Route::post('/warranty', function () {
    return 'USer login page';
})->name('user.login_form');


//PAge could access only by authenticated users
Route::get('/warranty/document', function () {
    return 'USer document page';
});


//PAge could be access by evryone.
Route::get('/warranty/{id}', function (Request $request, string $id) {
    return 'Document ' . $id;
});


Route::fallback(function () {
    return 'Error 404 Not Found';
});
