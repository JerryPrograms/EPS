<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuildingInfoManagementController extends Controller
{
    public function GetBuildingInfoListing()
    {
        return view('admin.building_info_management.listing');
    }

    public function GetBuildingDetails()
    {
        return view('admin.building_info_management.details');
    }

    public function GetCreateCustomerInfo()
    {
        return view('admin.building_info_management.create_customer_info');
    }

    public function GetAdminLogin(){
        dd('working');
    }
}
