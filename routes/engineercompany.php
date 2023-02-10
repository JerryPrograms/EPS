<?php

use App\Http\Controllers\engineercompany\AuthController;
use App\Http\Controllers\engineercompany\ContractController;
use App\Http\Controllers\engineercompany\EngineerCompanyController;
use App\Service\ASAndRepairCompanyInformation;
use App\Service\BuildingAndCompanyInformation;
use App\Service\Customer_Info;
use App\Service\DispatchInformationService;
use App\Service\EmergencyDispatchCheckListService;
use App\Service\EventService;
use App\Service\KeyAccessoryInformation;
use App\Service\ManageAttachmentsService;
use App\Service\MonthlyRegularInspectionService;
use App\Service\ParkingFacility;
use App\Service\PartReplacement;
use App\Service\QuoteService;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\engineercompany\ContractController;
use App\Http\Controllers\engineercompany\InspectionController;

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
    Route::post('/ec-signup-action', [AuthController::class, 'ec_signup_action'])->name('ec_signup_action');
    Route::post('/ec-login-action', [AuthController::class, 'ec_login_action'])->name('ec_login_action');
});


Route::group(['prefix' => 'eps-panel', 'middleware' => 'CommonRoutes'], function () {

    Route::get('logout', [EngineerCompanyController::class, 'EngineerCompanyLogout'])->name('ec.EngineerCompanyLogout');


    //Customer info
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


    //Dispatch Information management
    Route::get('/dispatch-information-listing/{uid}', [EngineerCompanyController::class, 'ListDispatchInformation'])->name('ec.ListDispatchInformation');
    Route::get('/dispatch-information-add/{uid}', [EngineerCompanyController::class, 'CreateDispatchInformation'])->name('ec.CreateDispatchInformation');
    Route::get('/dispatch-information-edit/{id}', [EngineerCompanyController::class, 'EditDispatchInformation'])->name('ec.EditDispatchInformation');
    Route::get('/dispatch-information-view/{id}', [EngineerCompanyController::class, 'ViewDispatchInformation'])->name('ec.ViewDispatchInformation');


    //Calender
    Route::get('/calender', [EngineerCompanyController::class, 'GetCalender'])->name('ec.GetCalender');

    //Quote Management
    Route::get('/quote-management/{uid}', [EngineerCompanyController::class, 'GetQuoteManagement'])->name('ec.GetQuoteManagement');
    Route::get('/add-quotation/{uid}', [EngineerCompanyController::class, 'AddQuote'])->name('ec.AddQuote');
    Route::get('/view-quotation/{uid}', [EngineerCompanyController::class, 'ViewQuote'])->name('ec.ViewQuote');
    Route::get('/pdf-quotation/{uid}', [EngineerCompanyController::class, 'PDFQuote'])->name('ec.PDFQuote');

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

    //Route to Create event in calendar
    Route::post('/create-event', [EventService::class, 'CreateEvent'])->name('CreateEvent');

    //Route to Change event date in calendar
    Route::post('/change-event-date', [EventService::class, 'ChangeEventDate'])->name('ChangeEventDate');

    //Route to get event date in calendar
    Route::post('/get-event-date', [EventService::class, 'GetEventDate'])->name('GetEventDate');

    //Route to get event date in calendar
    Route::post('/edit-event-date', [EventService::class, 'EditEventDate'])->name('EditEventDate');

    //Route to get event date in calendar
    Route::post('/delete-event-date', [EventService::class, 'DeleteEventDate'])->name('DeleteEventDate');

    //Route to get event date in calendar
    Route::post('/change-event-status', [EventService::class, 'ChangeEventStatus'])->name('ChangeEventStatus');

    // Contract Management
    Route::get('/contract-management-list/{id}', [ContractController::class, 'contract_management_list'])->name('contract_management_list');
    Route::get('/add-contract/{uid}', [ContractController::class, 'add_contract'])->name('add_contract');
    Route::post('/add-contract-action', [ContractController::class, 'add_contract_action'])->name('add_contract_action');
    Route::get('/contract-view', [ContractController::class, 'contract_view'])->name('contract_view');


    // Regular Inspection Log
    Route::get('/regular-inspection-log/{id}', [InspectionController::class, 'regular_inspection_log'])->name('regular_inspection_log');
    Route::get('/write-regular-inspection-log/{id}', [InspectionController::class, 'write_regular_inspection_log'])->name('write_regular_inspection_log');
    Route::post('/save-inspection-action', [InspectionController::class, 'save_inspection_action'])->name('save_inspection_action');

    //Route to Create todoEvent in calendar
    Route::post('/create-todo-event', [EventService::class, 'CreateTodo'])->name('CreateTodo');

    //Route to Create dispatch Information
    Route::post('/create-dispatch-information', [DispatchInformationService::class, 'CreateDispatchInformation'])->name('CreateDispatchInformation');

    //Route to Create Quote
    Route::post('/create-quote', [QuoteService::class, 'CreateQuote'])->name('CreateQuote');

    //Route to Delete Quote
    Route::post('/delete-quote', [QuoteService::class, 'DeleteQuote'])->name('DeleteQuote');

    //Route to Get Quote Data
    Route::post('/get-quote', [QuoteService::class, 'GetQuote'])->name('GetQuote');

});



