<?php

use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('detail', [HomeController::class, 'detail'])->name('detail');

Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index')->middleware('is_admin');
Route::resource('admin/cars', \App\Http\Controllers\Admin\CarController::class);
// Route::put('admin/cars/update-image/{id}', \App\Http\Controllers\Admin\CarController::class, 'updateImage')->name('admin.cars.updateImage');

Auth::routes();

Route::get('/home', [CarController::class, 'index'])->name('index')->middleware('is_admin');

Route::post('/store', [CarController::class, 'store'])->name('store');
Route::post('/update/{id}', [CarController::class, 'update'])->name('update');
Route::post('/deleteCars/{id}', [CarController::class, 'deleteCars'])->name('deleteCars');
// login logout
Route::get('/logout', [LoginController::class, 'logout'])->name('log-out');
Route::get('/indexlogin', [LoginController::class, 'indexLogin'])->name('login');
Route::get('/login', [LoginController::class, 'storeLogin'])->name('storeLogin');

