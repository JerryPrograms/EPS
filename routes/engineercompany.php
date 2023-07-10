<?php

use App\Http\Controllers\ConstructionController;
use App\Http\Controllers\engineercompany\AuthController;
use App\Http\Controllers\engineercompany\ContractController;
use App\Http\Controllers\engineercompany\EngineerCompanyController;
use App\Http\Controllers\engineercompany\InspectionController;
use App\Http\Controllers\EngineerCompanyController as CompanyController;
use App\Http\Controllers\EngineerController;
use App\Http\Controllers\ListingController;
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


Route::get('password-reset/{guard}', [AuthController::class, 'GetResetPassword'])->name('getResetPassword');
Route::post('send-password-reset/', [AuthController::class, 'SendResetPassword'])->name('SendResetPassword');
Route::get('update-password/{token}', [AuthController::class, 'UpdatePassword'])->name('UpdatePassword');
Route::get('check-email', [AuthController::class, 'CheckEmail'])->name('CheckEmail');
Route::post('update-password-reset/', [AuthController::class, 'UpdateResetPassword'])->name('UpdateResetPassword');

Route::group(['prefix' => 'eps-panel', 'middleware' => 'CommonRoutes'], function () {

    Route::get('logout/{role}', [EngineerCompanyController::class, 'EngineerCompanyLogout'])->name('ec.EngineerCompanyLogout');


    //engineer company dashbaord
    Route::get('/engineer-company/dashboard/{id}', [EngineerCompanyController::class, 'GetECDashboard'])->name('ec.ecdashboard');


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
    Route::post('/get-sub-parts', [EngineerCompanyController::class, 'GetSubParts'])->name('ec.GetSubParts');
    Route::post('/get-parts-data', [EngineerCompanyController::class, 'GetPartsData'])->name('ec.GetPartsData');
    Route::post('/edit-parts-replacement', [EngineerCompanyController::class, 'EditPartsReplacement'])->name('ec.EditPartsReplacement');


    //Dispatch Information management
    Route::get('/dispatch-information-listing/{uid}', [EngineerCompanyController::class, 'ListDispatchInformation'])->name('ec.ListDispatchInformation');
    Route::get('/dispatch-information-add/{uid}', [EngineerCompanyController::class, 'CreateDispatchInformation'])->name('ec.CreateDispatchInformation');
    Route::get('/dispatch-information-edit/{id}', [EngineerCompanyController::class, 'EditDispatchInformation'])->name('ec.EditDispatchInformation');
    Route::get('/dispatch-information-view/{id}', [EngineerCompanyController::class, 'ViewDispatchInformation'])->name('ec.ViewDispatchInformation');


    //Calender
    Route::get('/calender', [EngineerCompanyController::class, 'GetCalender'])->name('ec.GetCalender');
    Route::get('/calender-company/{id}', [EngineerCompanyController::class, 'GetCalenderCompany'])->name('ec.GetCalenderCompany');

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
    Route::post('/create-inspection-confirmation-certificate', [ParkingFacility::class, 'CreateInspectionConfirmationCertificate'])->name('CreateInspectionConfirmationCertificate');

    //Route to Create Main Key Accessory Main Part by engineer company
    Route::post('/create-main-key-accessory-information', [KeyAccessoryInformation::class, 'CreateMainKeyAccessoryInformation'])->name('CreateMainKeyAccessoryInformation');

    //Route to Create Main Key Accessory Sub Part by engineer company
    Route::post('/create-sub-part-title', [KeyAccessoryInformation::class, 'CreateSubPartTitle'])->name('CreateSubPartTitle');

    Route::post('/edit-sub-part-title', [KeyAccessoryInformation::class, 'EditSubPartTitle'])->name('EditSubPartTitle');

    Route::post('/delete-part', [KeyAccessoryInformation::class, 'DeletePart'])->name('DeletePart');

    //Route to Create Main Key Accessory Sub Part details by engineer company
    Route::post('/create-key-accessory-information', [KeyAccessoryInformation::class, 'CreateKeyAccessoryInformation'])->name('CreateKeyAccessoryInformation');

    Route::post('/update-key-accessory',[KeyAccessoryInformation::class,'UpdateKeyAccessoryMainPart'])->name('UpdateKeyAccessoryMainPart');

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

    Route::post('/sign-contract', [ContractController::class, 'SignContract'])->name('SignContract');

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

    //Route to complete event
    Route::post('mark-as-completed', [EventService::class, 'MarkAsCompleted'])->name('MarkAsCompleted');

    //Route to get event date in calendar
    Route::post('/change-event-status', [EventService::class, 'ChangeEventStatus'])->name('ChangeEventStatus');

    // Contract Management
    Route::get('/contract-management-list/{id}', [ContractController::class, 'contract_management_list'])->name('contract_management_list');
    Route::get('/contracts-management-list/{id}', [ContractController::class, 'contracts_management_list'])->name('contracts_management_list');
    Route::get('/add-contract/{uid}', [ContractController::class, 'add_contract'])->name('add_contract');
    Route::get('/view-contract/{id}', [ContractController::class, 'view_contract'])->name('view_contract');
    Route::post('/add-contract-action', [ContractController::class, 'add_contract_action'])->name('add_contract_action');
    Route::post('/search-contract-action', [ContractController::class, 'search_contract_action'])->name('search_contract_action');
    Route::post('/clear-contract-action', [ContractController::class, 'clear_contract_action'])->name('clear_contract_action');
    Route::get('/contract-view', [ContractController::class, 'contract_view'])->name('contract_view');


    // Regular Inspection Log
    Route::get('/regular-inspection-log/{id}', [InspectionController::class, 'regular_inspection_log'])->name('regular_inspection_log');
    Route::get('/write-regular-inspection-log/{id}', [InspectionController::class, 'write_regular_inspection_log'])->name('write_regular_inspection_log');
    Route::post('/save-inspection-action', [InspectionController::class, 'save_inspection_action'])->name('save_inspection_action');
    Route::get('/edit-regular-inspection-log/{id}', [InspectionController::class, 'edit_regular_inspection_log'])->name('edit_regular_inspection_log');
    Route::post('/edit-inspection-action', [InspectionController::class, 'edit_inspection_action'])->name('edit_inspection_action');
    Route::get('/view-regular-inspection-log/{id}', [InspectionController::class, 'view_regular_inspection_log'])->name('view_regular_inspection_log');


    //Construction Completion Report
    Route::get('/construction-completion-reports', [ConstructionController::class, 'construction_completion'])->name('construction_completion');
    Route::get('/construction-completion-reports-company/{id}', [ConstructionController::class, 'construction_completion_company'])->name('construction_completion_company');
    Route::get('/create-completion-reports/{id?}', [ConstructionController::class, 'create_construction_completion'])->name('create_construction_completion');
    Route::get('/edit-completion-reports/{id}', [ConstructionController::class, 'edit_construction_completion'])->name('edit_construction_completion');
    Route::get('/view-completion-reports/{id}', [ConstructionController::class, 'view_construction_completion'])->name('view_construction_completion');
    Route::post('/add-completion-reports', [ConstructionController::class, 'add_construction_completion'])->name('add_construction_completion');
    Route::post('/post-completion-reports', [ConstructionController::class, 'post_construction_completion'])->name('post_construction_completion');
    Route::post('/update-completion-reports', [ConstructionController::class, 'update_construction_completion'])->name('update_construction_completion');
    Route::post('/print-completion-reports', [ConstructionController::class, 'print_construction_completion'])->name('print_construction_completion');


    // Route to Create todoEvent in calendar
    Route::post('/create-todo-event', [EventService::class, 'CreateTodo'])->name('CreateTodo');

    // Route to Create dispatch Information
    Route::post('/create-dispatch-information', [DispatchInformationService::class, 'CreateDispatchInformation'])->name('CreateDispatchInformation');

    // Route to Create Quote
    Route::post('/create-quote', [QuoteService::class, 'CreateQuote'])->name('CreateQuote');

    // Route to Delete Quote
    Route::post('/delete-quote', [QuoteService::class, 'DeleteQuote'])->name('DeleteQuote');

    // Route to Get Quote Data
    Route::post('/get-quote', [QuoteService::class, 'GetQuote'])->name('GetQuote');
    Route::get('/get-quote-details/{id}', [QuoteService::class, 'GetQuoteDetails'])->name('GetQuoteDetails');

    // Listing Routes Start

    // Dispatch confirmation management
    Route::get('/dispatch-confirmation-management', [ListingController::class, 'distpatch_confirmation_listing'])->name('distpatch_confirmation_listing');
    Route::get('/dispatch-confirmation-management/company/{id}', [ListingController::class, 'distpatch_confirmation_listing_company'])->name('distpatch_confirmation_listing_company');
    Route::post('/del-dispatch-confirmation-record', [ListingController::class, 'del_dispatch_confirmation_record'])->name('del_dispatch_confirmation_record');

    // Regular inspection log management
    Route::get('/regular-inspection-logs/{filter?}', [ListingController::class, 'regular_inspection_logs'])->name('regular_inspection_logs');
    Route::get('/regular-inspection-logs-company/{id}/{filter?}', [ListingController::class, 'regular_inspection_logs_company'])->name('regular_inspection_logs_company');
    Route::post('/del-regular-inspection-log', [ListingController::class, 'del_regular_inspection_log'])->name('del_regular_inspection_log');

    //Contract Management Listing
    Route::get('/contract-management', [ListingController::class, 'contract_management'])->name('contract_management');
    Route::get('/contract-management-company/{id}', [ListingController::class, 'contract_management_company'])->name('contract_management_company');
    Route::post('/delete-contact-management', [ContractController::class, 'delete_contract'])->name('delete_contract');
    // Quotation Management Listing
    Route::get('/quotation-management', [ListingController::class, 'quotation_management'])->name('quotation_management');
    Route::get('/quotation-management-company/{id}', [ListingController::class, 'quotation_management_company'])->name('quotation_management_company');
    // Route::post('/del-regular-inspection-log', [ListingController::class, 'del_regular_inspection_log'])->name('del_regular_inspection_log');

    // Listing Routes End

    Route::post('/update-initial-date', [PartReplacement::class, 'UpdateReplacementInitialDate'])->name('UpdateReplacementInitialDate');


    Route::get('as-company-list', [CompanyController::class, 'ASCompanyList'])->name('ASCompanyList');

    Route::post('key-import', [KeyAccessoryInformation::class, 'ImportKey'])->name('ImportKey');
});

Route::group(['prefix' => 'eps-panel', 'middleware' => 'AdminAccess'], function () {
    // Engineer Company Management Start
    Route::get('/engineer-companies', [CompanyController::class, 'engineer_companies'])->name('engineer_companies');
    Route::get('/add-engineer-company', [CompanyController::class, 'add_engineer_company'])->name('add_engineer_company');
    Route::post('/add-engineer-company-action', [CompanyController::class, 'add_engineer_company_action'])->name('add_engineer_company_action');
    Route::get('/edit-engineer-company/{id}', [CompanyController::class, 'edit_engineer_company'])->name('edit_engineer_company');
    Route::post('/edit-engineer-company-action', [CompanyController::class, 'edit_engineer_company_action'])->name('edit_engineer_company_action');
    Route::post('/del-engineer-company-action', [CompanyController::class, 'del_engineer_company_action'])->name('del_engineer_company_action');
    // Engineer Company Management End


});

Route::group(['prefix' => 'eps-panel', 'middleware' => 'AdminCompanyAccess'], function () {
    // Engineer Management Start
    Route::get('/engineers', [EngineerController::class, 'engineers'])->name('engineers');
    Route::get('/engineers/company/{id}', [EngineerController::class, 'engineers_company'])->name('engineerscc');
    Route::get('/add-engineer', [EngineerController::class, 'add_engineer'])->name('add_engineer');
    Route::get('/add-engineer-by-company/{id}', [EngineerController::class, 'add_engineer_company'])->name('add_engineer_by_company');
    Route::post('/add-engineer-action', [EngineerController::class, 'add_engineer_action'])->name('add_engineer_action');
    Route::get('/edit-engineer/{id}', [EngineerController::class, 'edit_engineer'])->name('edit_engineer');
    Route::post('/edit-engineer-action', [EngineerController::class, 'edit_engineer_action'])->name('edit_engineer_action');
    Route::post('/del-engineer-action', [EngineerController::class, 'del_engineer_action'])->name('del_engineer_action');
    // Engineer Management End
});

Route::get('/customer-dashboard',[\App\Http\Controllers\CustomerInfoController::class,'GetCustomerDashboard'])->name('GetCustomerDashboard');

Route::post('delete-sub-part',[\App\Http\Controllers\CustomerInfoController::class,'delete_sub_part_form'])->name('delete_sub_part_form');

