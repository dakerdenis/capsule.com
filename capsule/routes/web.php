<?php
// Admin Dashboard Route (Protected by Middleware)
use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WarrantyDocumentController;
use Intervention\Image\Facades\Image;

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

Route::get('/image-test', function () {
    try {
        $image = Image::canvas(300, 200, '#ff0000'); // Create a red canvas
        return $image->response('jpg'); // Return the image response
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
});

///Verification for client
Route::get('/verification', [PageController::class, 'verification'])->name('verification');

///warranty from service center
Route::get('/warranty', [PageController::class, 'warranty'])->name('warranty');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('login');
Route::get('/warranty/register', [PageController::class, 'registerWarranty'])->name('warranty.register');
Route::get('/warranty/document', [PageController::class, 'warrantyDocument'])->name('warranty.document');
Route::post('/warranty/document', [WarrantyDocumentController::class, 'uploadDocument'])->name('upload.document');





// Admin Login Routes
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware([AdminAuth::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'showAdminPage'])->name('admin.dashboard');
});



// Fallback Locale Middleware (optional)
Route::fallback(function () {
    return redirect('/en');
});
