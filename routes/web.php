<?php

use App\Livewire\AdminDashBoard;
use App\Livewire\CustomerDashBoard;
use App\Livewire\SuperadminDashBoard;
use App\Livewire\VendorDashBoard;
use App\Models\Province;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth' => 'web'])->group(function () {
    Route::get('/', [\App\Http\Controllers\PageController::class, 'homepage'])->name('homepage');
    Route::get('/shop', [\App\Http\Controllers\PageController::class, 'shop'])->name('shop');
    Route::get('/product/{product?}', [\App\Http\Controllers\PageController::class, 'productDetails'])->name('products.details');
    Route::get('/cart', [\App\Http\Controllers\PageController::class, 'cart'])->name('cart');
    Route::get('/checkout', [\App\Http\Controllers\PageController::class, 'checkout'])->name('checkout');
    Route::get('/contact', [\App\Http\Controllers\PageController::class, 'contact'])->name('contact');
    Route::get('/termsandcondition', [\App\Http\Controllers\PageController::class, 'termsAndCondition'])->name('terms');
    Route::get('/return-and-refund-policy', [\App\Http\Controllers\PageController::class, 'returnPolicy'])->name('return');
    Route::get('/privacy-and-cookie-policy', [\App\Http\Controllers\PageController::class, 'privacyPolicy'])->name('privacy');
    Route::get('/about', [\App\Http\Controllers\PageController::class, 'about'])->name('about');
    Route::get('/faq', [\App\Http\Controllers\PageController::class, 'faq'])->name('faq');
    Route::post('getCities', [\App\Http\Controllers\PageController::class, 'getCities'])->name('getCities');
});
Route::get("/test", function () {
    return view('emails.registration');
});

Route::get('/home', fn() => redirect()->route(auth()->user()->current_role));

// Auth Route
Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', \App\Livewire\Profile::class)->name('profile');
});

// Customer Route
Route::group(['middleware' => ['auth', 'role:customer'], 'prefix' => 'customer'], function () {
    Route::get('/dashboard', CustomerDashBoard::class)->name('customer');
});


// vendor Route
Route::group(['middleware' => ['auth', 'role:vendor'], 'prefix' => 'vendor'], function () {
    Route::get('/dashboard', VendorDashBoard::class)->name('vendor');
});


// Admin Route
Route::group(['middleware' => ['auth', 'role:admin'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', AdminDashBoard::class)->name('admin');
    Route::get('/users', \App\Livewire\UsersTable::class)->name('users');
});


// Superadmin Route
Route::group(['middleware' => ['auth', 'role:superadmin'], 'prefix' => 'superadmin'], function () {
    Route::get('/dashboard', SuperadminDashBoard::class)->name('superadmin');
});