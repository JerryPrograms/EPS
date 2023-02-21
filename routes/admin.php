<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BuildingInfoManagementController;
use App\Http\Controllers\Admin\AdminnController;

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


Route::group(['prefix' => 'admin'], function () {

    Route::get('/login', [AdminnController::class, 'GetAdminLogin'])->name('admin.AdminLogin');
    Route::post('/admin-login-action', [AdminnController::class, 'admin_login_action'])->name('admin_login_action');

    Route::group(['prefix' => 'building-info'], function () {
        Route::get('/listing', [BuildingInfoManagementController::class, 'GetBuildingInfoListing'])->name('admin.GetBuildingInfoListing');
        Route::get('/details', [BuildingInfoManagementController::class, 'GetBuildingDetails'])->name('admin.GetBuildingDetails');
        Route::get('/create-custom-info', [BuildingInfoManagementController::class, 'GetCreateCustomerInfo'])->name('admin.GetCreateCustomerInfo');
    });

});
