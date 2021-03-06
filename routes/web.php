<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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


Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [AuthController::class, 'LoginForm'])->name('login');
Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'store'])->name('store');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['auth']], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


    Route::get('/maintenance', function () {
        Artisan::call('down');
        return 'Website Sedang Maintenance!';
    });

    Route::get('/up-maintenance', function () {
        Artisan::call('up');
        return 'Website Sudah Up!';
    });

    Route::get('/optimize', function () {
        Artisan::call('optimize');
        return 'Website Sudah di optimasi!';
    });

    Route::get('/cache-clear', function () {
        Artisan::call('cache:clear');
        return 'Website Sudah di Clear Cache!';
    });
});
