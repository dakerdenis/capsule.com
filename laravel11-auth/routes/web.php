<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', function () {
    return view('welcome');
});

//login authorization for administrators
Route::get('/login', function () {
    return 'login page';
})->name('admin.login');
Route::post('/login', function () {
    return 'login page';
})->name('admin.login_form');




Route::middleware('auth_admin')->group(function () {
    //dashboard admin page - admin panel only could be accessed by authenticated adminstrators
    Route::get('/dashboard', function () {
        return ' admin page';
    })->name('admin.dashboard');
    //PRODUCTS + SERVICES + WARANTIES
    Route::prefix('dashboard')->group(function () {
        //PRODUCTS
        Route::get('/products', function () {
            return ' admin products page';
        });
        //SERVICES
        Route::get('/services', function () {
            return 'admin products page';
        })->name('admin.services');
        //WARRANTIES
        Route::get('/warranties', function () {
            return 'admin warranties page';
        })->name('admin.warranties');
    });
});


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