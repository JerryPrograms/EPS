<?php

namespace App\Http\Controllers\engineer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EngineerController extends Controller
{
    public function GetCustomerInfoDashboard()
    {
        return view('engineer.customer_info_dashboard');
    }

    public function GetCustomerInfoListing()
    {
        return view('engineer.customer_list');
    }

    public function CreateBuildingInfo()
    {
        return view('engineer.building_info');
    }

    public function CreateCompanyInfo()
    {
        return view('engineer.company_info');
    }

    public function CreateParkingFacility()
    {
        return view('engineer.parking_facility');
    }

    public function CreateKeyAccessoryHistory()
    {
        return view('engineer.key_accessory');
    }
}
