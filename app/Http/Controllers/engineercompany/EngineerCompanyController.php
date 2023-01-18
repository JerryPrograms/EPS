<?php

namespace App\Http\Controllers\engineercompany;

use App\Http\Controllers\Controller;
use App\Models\CustomerInfo;
use Illuminate\Http\Request;

class EngineerCompanyController extends Controller
{
    public function GetCustomerInfoDashboard()
    {
        return view('engineer_company.customer_info_dashboard');
    }

    public function GetCustomerInfoListing()
    {
        //TODO : Add where condition on engineer company logged in
        $customer = CustomerInfo::latest()->paginate(10);
        return view('engineer_company.customer_list',compact('customer'));
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
