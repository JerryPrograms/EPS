<?php

use App\Http\Controllers\engineercompany\AuthController;
use App\Http\Controllers\engineercompany\EngineerCompanyController;
use App\Service\ASAndRepairCompanyInformation;
use App\Service\BuildingAndCompanyInformation;
use App\Service\Customer_Info;
use App\Service\EmergencyDispatchCheckListService;
use App\Service\KeyAccessoryInformation;
use App\Service\ManageAttachmentsService;
use App\Service\MonthlyRegularInspectionService;
use App\Service\ParkingFacility;
use App\Service\PartReplacement;
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

Route::group(['prefix' => 'engineer-company'],function(){
    Route::get('/login', [AuthController::class, 'GetECLogin'])->name('ec.GetECLogin');
    Route::get('/signup', [AuthController::class, 'GetECSignup'])->name('ec.GetECSignup');
    Route::post('/ec-signup-action', [AuthController::class, 'ec_signup_action'])->name('ec_signup_action');
    Route::post('/ec-login-action', [AuthController::class, 'ec_login_action'])->name('ec_login_action');
});

Route::group(['prefix' => 'eps-panel'], function () {

    Route::get('/customer-info-listing', [EngineerCompanyController::class, 'GetCustomerInfoListing'])->name('ec.GetCustomerInfoListing');
    Route::get('/customer-info-dashboard/{uid}', [EngineerCompanyController::class, 'GetCustomerInfoDashboard'])->name('ec.GetCustomerInfoDashboard');
    Route::get('/building-info/{uid}', [EngineerCompanyController::class, 'CreateBuildingInfo'])->name('ec.CreateBuildingInfo');
    Route::get('/as-and-engineer-company/{uid}', [EngineerCompanyController::class, 'CreateCompanyInfo'])->name('ec.CreateCompanyInfo');
    Route::get('/parking-facility/{uid}', [EngineerCompanyController::class, 'CreateParkingFacility'])->name('ec.CreateParkingFacility');
    Route::get('/key-accessory-history/{uid}', [EngineerCompanyController::class, 'CreateKeyAccessoryHistory'])->name('ec.CreateKeyAccessoryHistory');
    Route::get('/parts-replacement-history/{uid}', [EngineerCompanyController::class, 'CreatePartsReplacementHistory'])->name('ec.CreatePartsReplacementHistory');
    Route::get('/monthly-regular-inspection/{uid}', [EngineerCompanyController::class, 'CreateMonthlyRegularInspection'])->name('ec.CreateMonthlyRegularInspection');
    Route::get('/emergency-dispatch-checklist/{uid}', [EngineerCompanyController::class, 'CreateEmergencyDispatchChecklist'])->name('ec.CreateEmergencyDispatchChecklist');
    Route::get('/manage-attachments/{uid}', [EngineerCompanyController::class, 'CreateManageAttachments'])->name('ec.CreateManageAttachments');
    Route::get('/dispatch-information-listing/{uid}', [EngineerCompanyController::class, 'CreateDispatchInformation'])->name('ec.CreateDispatchInformation');
    Route::get('/calender', [EngineerCompanyController::class, 'GetCalender'])->name('ec.GetCalender');


    //Route to create customer basic information by engineer company
    Route::post('/post-customer-info', [Customer_Info::class, 'CreateCustomerInfo'])->name('CustomerInfo');

    //Route to delete customer basic information by engineer company
    Route::post('/delete-customer-info', [Customer_Info::class, 'DeleteCustomerInfo'])->name('DeleteCustomerInfo');

    //Route to search customer basic information by engineer company
    Route::post('/search-customer-info', [Customer_Info::class, 'SearchCustomerInfo'])->name('SearchCustomerInfo');

    //Route to search customer basic information by engineer company
    Route::post('/clear-customer-info', [Customer_Info::class, 'ClearCustomerInfo'])->name('ClearCustomerInfo');

    //Route to Create Building and Company Information by engineer company
    Route::post('/create-building-and-company-information', [BuildingAndCompanyInformation::class, 'CreateBuildingAndCompanyInformation'])->name('CreateBuildingAndCompanyInformation');

    //Route to Create AS and Repair Company Information by engineer company
    Route::post('/create-as-and-repair-company-information', [ASAndRepairCompanyInformation::class, 'CreateASAndRepairCompanyInformation'])->name('CreateASAndRepairCompanyInformation');

    //Route to Create Parking Facility and Parking Facility Certificate Information by engineer company
    Route::post('/create-parking-information-and-parking-certificate-information', [ParkingFacility::class, 'CreateParkingFacilityAndCertificate'])->name('CreateParkingFacilityAndCertificate');

    //Route to Create Main Key Accessory Main Part by engineer company
    Route::post('/create-main-key-accessory-information', [KeyAccessoryInformation::class, 'CreateMainKeyAccessoryInformation'])->name('CreateMainKeyAccessoryInformation');

    //Route to Create Main Key Accessory Sub Part by engineer company
    Route::post('/create-sub-part-title', [KeyAccessoryInformation::class, 'CreateSubPartTitle'])->name('CreateSubPartTitle');

    //Route to Create Main Key Accessory Sub Part details by engineer company
    Route::post('/create-key-accessory-information', [KeyAccessoryInformation::class, 'CreateKeyAccessoryInformation'])->name('CreateKeyAccessoryInformation');

    //Route to Create Part Replacement Information by engineer company
    Route::post('/create-part-replacement-information', [PartReplacement::class, 'CreatePartReplacementHistory'])->name('CreatePartReplacementHistory');

    //Route to Filter Part Replacement Information by engineer company
    Route::post('/filter-part-replacement-information', [PartReplacement::class, 'FilterPartReplacementHistory'])->name('FilterPartReplacementHistory');

    //Route to Delete Part Replacement Information by engineer company
    Route::post('/delete-part-replacement-information', [PartReplacement::class, 'DeletePartReplacementHistory'])->name('DeletePartReplacementHistory');

    //Route to Create Monthly Regular Inspection Information by engineer company
    Route::post('/create-monthly-regular-inspection-information', [MonthlyRegularInspectionService::class, 'CreateMonthlyRegularInspection'])->name('CreateMonthlyRegularInspection');

    //Route to Filter Monthly Regular Inspection Information by engineer company
    Route::post('/filter-monthly-regular-inspection-information', [MonthlyRegularInspectionService::class, 'FilerMonthlyInspection'])->name('FilerMonthlyInspection');

    //Route to Delete Monthly Regular Inspection Information by engineer company
    Route::post('/delete-monthly-regular-inspection-information', [MonthlyRegularInspectionService::class, 'DeleteMonthlyInspection'])->name('DeleteMonthlyInspection');

    //Route to Create Emergency Dispatch Information by engineer company
    Route::post('/create-emergency-dispatch-check-list', [EmergencyDispatchCheckListService::class, 'CreateEmergencyDispatchCheckList'])->name('CreateEmergencyDispatchCheckList');

    //Route to Filter Monthly Regular Inspection Information by engineer company
    Route::post('/filter-emergency-dispatch-check-list', [EmergencyDispatchCheckListService::class, 'FilerEmergencyDispatchCheckList'])->name('FilerEmergencyDispatchCheckList');

    //Route to Delete Monthly Regular Inspection Information by engineer company
    Route::post('/delete-emergency-dispatch-check-list', [EmergencyDispatchCheckListService::class, 'DeleteEmergencyDispatchCheckList'])->name('DeleteEmergencyDispatchCheckList');

    //Route to Create Manage Attachments Information by engineer company
    Route::post('/create-manage-attachments', [ManageAttachmentsService::class, 'CreateManageAttachments'])->name('CreateManageAttachments');

    //Route to Delete Manage Attachments Information by engineer company
    Route::post('/delete-manage-attachments', [ManageAttachmentsService::class, 'DeleteAttachments'])->name('DeleteAttachments');

});
