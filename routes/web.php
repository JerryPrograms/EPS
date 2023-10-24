<?php

use App\Http\Controllers\customer\AuthController;
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
Route::get('/storage-link',function(){
    \Artisan::call('storage:link');
});

Route::get('/config-cache',function(){
    \Artisan::call('config:cache');
});

Route::get('/optimize-clear',function(){
    \Artisan::call('optimize:clear');
});

Route::get('/migrate',function(){
    \Artisan::call('migrate');
});

Route::group(['prefix' => 'customer'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('customer-login');
    // Route::get('/signup', [AuthController::class, 'GetECSignup'])->name('e.GetECSignup');
    // Route::post('/engineer-signup-action', [AuthController::class, 'engineer_signup_action'])->name('engineer_signup_action');
    Route::post('/customer-login-action', [AuthController::class, 'customer_login_action'])->name('customer_login_action');
});

Auth::routes();

Route::post('/turn-off-contract', [AuthController::class, 'TurnOffContract'])->name('customer.TurnOffContract');
Route::post('/turn-off-quote', [AuthController::class, 'TurnOffQuote'])->name('customer.TurnOffQuote');
Route::post('/turn-off-completion', [AuthController::class, 'TurnOffCompletion'])->name('customer.TurnOffCompletion');
