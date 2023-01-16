<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BuildingInfoManagementController;
use App\Http\Controllers\Admin\AdminController;

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


    Route::get('/login',[AdminController::class,'GetAdminLogin'])->name('admin.AdminLogin');
    Route::get('/listing', [BuildingInfoManagementController::class, 'GetBuildingInfoListing'])->name('admin.GetBuildingInfoListing');
});
