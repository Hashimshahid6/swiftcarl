<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;

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


Route::group(['namespace' => 'Backend\Auth'], function () {
    Auth::routes(); // This will use the controllers in the Backend/Auth namespace
});

Route::get('/admin', [HomeController::class, 'root']);
Route::get('{any}', [HomeController::class, 'index'])->name('index');