<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



//superadmin 
Route::middleware(['auth','notAdmin'])->group(function () {
    Route::get('/superadmin/home', [App\Http\Controllers\HomeController::class, 'superHome'])->name('super.home');
    Route::get('/superadmin/admin-table', [App\Http\Controllers\HomeController::class, 'adminTable']);
});

Route::post('/superadmin/admin-table', [App\Http\Controllers\superadminController::class, 'update']);

//---------------------------------------------------------------------------------------------------------------------------
 
//admin
Route::middleware(['auth','notSuperadmin'])->group(function () {
    Route::get('/approval', [App\Http\Controllers\HomeController::class, 'approval'])->name('approval'); //check if verified

Route::middleware(['approved'])->group(function () {
        Route::get('/confirm-otp', [App\Http\Controllers\HomeController::class, 'confirmOtp'])->name('confirm-otp');  //check if code is zero

Route::middleware(['codeZero'])->group(function () {
            Route::get('/adminDisabled', [App\Http\Controllers\HomeController::class, 'adminDisabled'])->name('adminDisabled'); //check if disabled

Route::middleware(['adminDisabled'])->group(function () {
                Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

                });
            });
        });
    });

Route::post('/confirm-otp', [App\Http\Controllers\HomeController::class, 'confirmOtpForm']);

