<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BuildingInfoManagementController;
use App\Http\Controllers\customer\AuthController;

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

Route::group(['prefix' => 'customer'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('customer-login');
    // Route::get('/signup', [AuthController::class, 'GetECSignup'])->name('e.GetECSignup');
    // Route::post('/engineer-signup-action', [AuthController::class, 'engineer_signup_action'])->name('engineer_signup_action');
    Route::post('/customer-login-action', [AuthController::class, 'customer_login_action'])->name('customer_login_action');
});

Auth::routes();
