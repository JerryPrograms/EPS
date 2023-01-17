<?php

namespace App\Http\Controllers\engineercompany;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EngineerCompanyController extends Controller
{
    public function GetCustomerInfoDashboard()
    {
        return view('engineer_company.customer_info_dashboard');
    }

    public function GetCustomerInfoListing()
    {
        return view('engineer_company.customer_list');
    }

    public function CreateBuildingInfo()
    {
        return view('engineer_company.building_info');
    }

    public function CreateCompanyInfo()
    {
        return view('engineer_company.company_info');
    }

    public function CreateParkingFacility()
    {
        return view('engineer_company.parking_facility');
    }

    public function CreateKeyAccessoryHistory()
    {
        return view('engineer_company.key_accessory');
    }
}
