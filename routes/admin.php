<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BuildingAddressController;
use App\Http\Controllers\admin\BuildingInfoManagementController;
use App\Http\Controllers\ClientController;
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


Route::group(['prefix' => 'admin'], function () {

    Route::get('/login', [AdminController::class, 'GetAdminLogin'])->name('admin.AdminLogin');
    Route::post('/admin-login-action', [AdminController::class, 'admin_login_action'])->name('admin_login_action');

    Route::group(['prefix' => 'building-info'], function () {
        Route::get('/listing', [BuildingInfoManagementController::class, 'GetBuildingInfoListing'])->name('admin.GetBuildingInfoListing');
        Route::get('/details', [BuildingInfoManagementController::class, 'GetBuildingDetails'])->name('admin.GetBuildingDetails');
        Route::get('/create-custom-info', [BuildingInfoManagementController::class, 'GetCreateCustomerInfo'])->name('admin.GetCreateCustomerInfo');
    });

    Route::group(['prefix' => 'building-address'], function () {
        Route::get('/listing', [BuildingAddressController::class, 'GetCreateAddress'])->name('admin.GetCreateAddress');
        Route::post('/create', [BuildingAddressController::class, 'PostCreateAddress'])->name('admin.PostCreateAddress');
        Route::post('/delete', [BuildingAddressController::class, 'DeleteAddress'])->name('admin.DeleteAddress');
        Route::post('/edit', [BuildingAddressController::class, 'EditAddress'])->name('admin.EditAddress');
    });


});

Route::group(['prefix' => 'client'], function () {
    Route::get('/listing', [ClientController::class, 'get_client_listing'])->name('clients_listing');
    Route::get('/add', [ClientController::class, 'add_client'])->name('add_client');
    Route::post('/create', [ClientController::class, 'create_client'])->name('create_client');
    Route::get('/view/{type}/{id}', [ClientController::class, 'view_client'])->name('view_client');
    Route::get('/edit/{type}/{id}', [ClientController::class, 'edit_client'])->name('edit_client');
    Route::post('/update', [ClientController::class, 'update_client'])->name('update_client');
    Route::post('/delete', [ClientController::class, 'delete_client'])->name('delete_client');
});
