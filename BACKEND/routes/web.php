<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('/superadmin/home', [App\Http\Controllers\HomeController::class, 'superHome'])->name('super.home')->middleware('role');
Route::get('/superadmin/admin-table', [App\Http\Controllers\HomeController::class, 'adminTable'])->middleware('role');
Route::middleware(['auth'])->group(function () {
    Route::get('/approval', [App\Http\Controllers\HomeController::class, 'approval'])->name('approval');

    Route::middleware(['approved'])->group(function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    });
});

Route::post('/superadmin/admin-table/verify', [App\Http\Controllers\adminController::class, 'update']);
Route::get('/confirm-otp', [App\Http\Controllers\HomeController::class, 'confirmOtpForm'])->name('confirm.otp');



