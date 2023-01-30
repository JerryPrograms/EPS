<?php

namespace App\Http\Controllers\engineercompany;

use App\Http\Controllers\Controller;
use App\Models\CustomerInfo;
use App\Models\Events;

class EngineerCompanyController extends Controller
{
    public function GetCustomerInfoDashboard($uid)
    {
        $customer = CustomerInfo::where('user_uid', $uid)->first();
        if ($customer) {
            return view('engineer_company.customer_info_dashboard', compact('customer'));
        }
        abort(404);
    }

    public function GetCustomerInfoListing()
    {
        //TODO : Add where condition on engineer company logged in
        $customer = CustomerInfo::latest()->paginate(10);
        return view('engineer_company.customer_list', compact('customer'));
    }

    public function CreateBuildingInfo($uid)
    {
        $customer = CustomerInfo::where('user_uid', $uid)->first();
        if ($customer) {
            return view('engineer_company.building_info', compact('customer'));
        }
        abort(404);
    }

    public function CreateCompanyInfo($uid)
    {
        $customer = CustomerInfo::where('user_uid', $uid)->first();
        if ($customer) {
            return view('engineer_company.company_info', compact('customer'));
        }
        abort(404);
    }

    public function CreateParkingFacility($uid)
    {
        $customer = CustomerInfo::where('user_uid', $uid)->first();
        if ($customer) {
            return view('engineer_company.parking_facility', compact('customer'));
        }
        abort(404);
    }

    public function CreateKeyAccessoryHistory($uid)
    {
        $customer = CustomerInfo::where('user_uid', $uid)->first();
        if ($customer) {
            return view('engineer_company.key_accessory', compact('customer'));
        }
        abort(404);

    }

    public function CreatePartsReplacementHistory($uid)
    {
        $customer = CustomerInfo::where('user_uid', $uid)->first();
        if ($customer) {
            return view('engineer_company.parts_replacement_history', compact('customer'));
        }
        abort(404);
    }

    public function CreateMonthlyRegularInspection($uid)
    {
        $customer = CustomerInfo::where('user_uid', $uid)->first();
        if ($customer) {
            return view('engineer_company.monthly_regular_inspection', compact('customer'));
        }
        abort(404);
    }

    public function CreateEmergencyDispatchChecklist($uid)
    {
        $customer = CustomerInfo::where('user_uid', $uid)->first();
        if ($customer) {
            return view('engineer_company.emergency_dispatch_check_list', compact('customer'));
        }
        abort(404);
    }

    public function CreateManageAttachments($uid)
    {
        $customer = CustomerInfo::where('user_uid', $uid)->first();
        if ($customer) {
            return view('engineer_company.manage_attachments', compact('customer'));
        }
        abort(404);
    }

    public function CreateDispatchInformation($uid)
    {
        $customer = CustomerInfo::where('user_uid', $uid)->first();
        if ($customer) {
            return view('engineer_company.dispatch_information', compact('customer'));
        }
        abort(404);
    }

    public function GetCalender()
    {
        $events = Events::latest()->get();
        $data = array();

        if (count($events) > 0) {
            foreach ($events as $ev) {
                if (!empty($ev->end_date)) {
                    $data[] = [
                        'id' => $ev->id,
                        'title' => $ev->title,
                        'start' => $ev->start_date,
                        'end' => $ev->end_date,
                        'color' => $ev->color,
                    ];
                } else {
                    $data[] = [
                        'id' => $ev->id,
                        'title' => $ev->title,
                        'start' => $ev->start_date,
                        'end' => $ev->start_date,
                        'color' => $ev->color,
                    ];
                }

            }
        }

        return view('engineer_company.calender', compact('data','events'));
    }
}
