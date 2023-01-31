<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\engineer\AuthController;
use \App\Http\Controllers\engineer\EngineerController;


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


Route::group(['prefix' => 'engineer'], function () {
    Route::get('/login', [AuthController::class, 'GetECLogin'])->name('e.GetECLogin');
    Route::get('/signup', [AuthController::class, 'GetECSignup'])->name('e.GetECSignup');
    Route::post('/engineer-signup-action', [AuthController::class, 'engineer_signup_action'])->name('engineer_signup_action');
    Route::post('/engineer-login-action', [AuthController::class, 'engineer_login_action'])->name('engineer_login_action');

    Route::get('/customer-info-dashboard', [EngineerController::class, 'GetCustomerInfoDashboard'])->name('e.GetCustomerInfoDashboard');
    Route::get('/customer-info-listing', [EngineerController::class, 'GetCustomerInfoListing'])->name('e.GetCustomerInfoListing');
    Route::get('/building-info', [EngineerController::class, 'CreateBuildingInfo'])->name('e.CreateBuildingInfo');
    Route::get('/company-info', [EngineerController::class, 'CreateCompanyInfo'])->name('e.CreateCompanyInfo');
    Route::get('/parking-facility', [EngineerController::class, 'CreateParkingFacility'])->name('e.CreateParkingFacility');
    Route::get('/key-accessory-history', [EngineerController::class, 'CreateKeyAccessoryHistory'])->name('e.CreateKeyAccessoryHistory');
});
