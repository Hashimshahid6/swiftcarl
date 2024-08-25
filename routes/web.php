<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\MenuController;

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

Route::get('/admin/ecommerce-add-product', function () {
    return view('backend.ecommerce-add-product');
});

Route::resource('login', AuthController::class);
Route::resource('register', RegisterController::class);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth','admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('menu', MenuController::class);
});