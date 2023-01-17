<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\engineercompany\AuthController;
use App\Http\Controllers\engineercompany\EngineerCompanyController;


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


Route::group(['prefix' => 'engineer-company'], function () {

    Route::get('/login', [AuthController::class, 'GetECLogin'])->name('ec.GetECLogin');
    Route::get('/signup', [AuthController::class, 'GetECSignup'])->name('ec.GetECSignup');
    Route::get('/customer-info-dashboard', [EngineerCompanyController::class, 'GetCustomerInfoDashboard'])->name('ec.GetCustomerInfoDashboard');
    Route::get('/customer-info-listing', [EngineerCompanyController::class, 'GetCustomerInfoListing'])->name('ec.GetCustomerInfoListing');
    Route::get('/building-info', [EngineerCompanyController::class, 'CreateBuildingInfo'])->name('ec.CreateBuildingInfo');
    Route::get('/company-info', [EngineerCompanyController::class, 'CreateCompanyInfo'])->name('ec.CreateCompanyInfo');
    Route::get('/parking-facility', [EngineerCompanyController::class, 'CreateParkingFacility'])->name('ec.CreateParkingFacility');
    Route::get('/key-accessory-history', [EngineerCompanyController::class, 'CreateKeyAccessoryHistory'])->name('ec.CreateKeyAccessoryHistory');


});
