<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\DashboardProductsController;
use App\Http\Controllers\DashboardSettingsController;
use App\Http\Controllers\Admin\ProductGalleryController;
use App\Http\Controllers\DashboardTransactionsController;
use App\Http\Controllers\Admin\DashboardController as Admin;
use App\Http\Controllers\Admin\CategoryController as Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/categories', [CategoryController::class, 'index'])
        ->name('categories');
Route::get('/categories/{id}', [CategoryController::class, 'detail'])
        ->name('categories-detail');

Route::get('/details/{id?}', [DetailController::class, 'index'])
        ->name('detail');
Route::post('/details/{id?}', [DetailController::class, 'add'])
        ->name('detail-add');

Route::get('/checkout/callback', [CheckoutController::class, 'callback'])
        ->name('midtrans-callback');

Route::get('/success', [CartController::class, 'success'])
        ->name('success');
Route::get('/register/success', [RegisterController::class, 'success'])
        ->name('register-success');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/cart', [CartController::class, 'index'])
            ->name('cart');
    Route::delete('/cart/{id}', [CartController::class, 'delete'])
            ->name('cart-delete');

    Route::post('/checkout', [CheckoutController::class, 'process'])
            ->name('checkout');

    Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');
    Route::get('/dashboard/products', [DashboardProductsController::class, 'index'])
            ->name('dashboard-products');
    Route::get('/dashboard/products/create', [DashboardProductsController::class, 'create'])
            ->name('dashboard-products-create');
    Route::post('/dashboard/products', [DashboardProductsController::class, 'store'])
            ->name('dashboard-products-store');
    Route::get('/dashboard/products/{id}', [DashboardProductsController::class, 'details'])
            ->name('dashboard-products-details');
    Route::post('/dashboard/products/{id}', [DashboardProductsController::class, 'update'])
            ->name('dashboard-products-update');

    Route::post('/dashboard/products/gallery/upload', [DashboardProductsController::class, 'uploadGallery'])
            ->name('dashboard-products-gallery-upload');
    Route::get('/dashboard/products/delete/{id}', [DashboardProductsController::class, 'deleteGallery'])
            ->name('dashboard-products-gallery-delete');

    Route::get('/dashboard/transactions', [DashboardTransactionsController::class, 'index'])
            ->name('dashboard-transactions');
    Route::get('/dashboard/transactions/{id}', [DashboardTransactionsController::class, 'details'])
            ->name('dashboard-transactions-details');
    Route::post('/dashboard/transactions/{id}', [DashboardTransactionsController::class, 'update'])
            ->name('dashboard-transactions-update');

    Route::get('/dashboard/settings', [DashboardSettingsController::class, 'settings'])
            ->name('dashboard-settings-store');
    Route::get('/dashboard/account', [DashboardSettingsController::class, 'account'])
            ->name('dashboard-settings-account');
    Route::post('/dashboard/account/{redirect}', [DashboardSettingsController::class, 'update'])
            ->name('dashboard-settings-redirect');
    

});
// middleware(['auth','admin']);
Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', [Admin::class, 'index'])->name('admin-dashboard');
        Route::resource('category', Category::class);
        Route::resource('user', UserController::class);
        Route::resource('product', ProductController::class);
        Route::resource('product-gallery', ProductGalleryController::class);
        Route::resource('transaction', TransactionController::class);
    });

Auth::routes();
