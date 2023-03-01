<?php

namespace App\Http\Controllers\engineercompany;

use App\Http\Controllers\Controller;
use App\Models\CustomerInfo;
use App\Models\DispatchInformationData;
use App\Models\Engineer;
use App\Models\Engineer_company;
use App\Models\Events;
use App\Models\Quotation;
use App\Models\Todo;

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

        if (activeGuard() == 'admin') {
            $customer = CustomerInfo::latest()->paginate(10);
        } else if (activeGuard() == 'engineer') {
            $companies = Engineer_company::where('id', auth(activeGuard())->user()->affiliated_company)->first();
            $customer = CustomerInfo::orwhere(function ($query) use ($companies) {
                $query->where('added_by', 'engineer_company')
                    ->where('added_by_id', $companies->id);
            })->orwhere(function ($query) {
                $query->where('added_by', activeGuard())
                    ->where('added_by_id', auth(activeGuard())->id());
            })->latest()->paginate(10);
        } else {
            $engineers = Engineer::where('affiliated_company', auth(activeGuard())->id())->first();
            $customer = CustomerInfo::orwhere(function ($query) use ($engineers) {
                $query->where('added_by', 'engineer')
                    ->where('added_by_id', $engineers->id);
            })->orwhere(function ($query) {
                $query->where('added_by', activeGuard())
                    ->where('added_by_id', auth(activeGuard())->id());
            })->latest()->paginate(10);
        }
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

    public function ListDispatchInformation($uid)
    {
        $customer = CustomerInfo::where('user_uid', $uid)->first();
        if ($customer) {
            return view('engineer_company.dispatch_information', compact('customer'));
        }
        abort(404);
    }

    public function CreateDispatchInformation($uid)
    {
        $customer = CustomerInfo::where('user_uid', $uid)->first();
        if ($customer) {
            return view('engineer_company.create_dispatch_information', compact('customer'));
        }
        abort(404);
    }

    public function EditDispatchInformation($id)
    {
        $dispatch = DispatchInformationData::where('id', $id)->first();
        if ($dispatch) {
            return view('engineer_company.edit_dispatch_information', compact('dispatch'));
        }
        abort(404);
    }

    public function ViewDispatchInformation($id)
    {
        $dispatch = DispatchInformationData::where('id', $id)->first();
        if ($dispatch) {
            return view('engineer_company.view_dispatch_information', compact('dispatch'));
        }
        abort(404);
    }

    public function GetCalender()
    {
        if (activeGuard() == 'admin') {
            $events = Events::where('status', 0)->latest()->get();
            $todos_pending = Todo::where('status', 0)->latest()->get();
            $todos_completed = Todo::where('status', 1)->latest()->get();
        } else {
            $events = Events::where('status', 0)->where('user_id', auth(activeGuard())->user()->id)->latest()->get();
            $todos_pending = Todo::where('status', 0)->where('user_id', auth(activeGuard())->user()->id)->latest()->get();
            $todos_completed = Todo::where('status', 1)->where('user_id', auth(activeGuard())->user()->id)->latest()->get();
        }

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
                        'textColor' => $ev->text_color,
                    ];
                } else {
                    $data[] = [
                        'id' => $ev->id,
                        'title' => $ev->title,
                        'start' => $ev->start_date,
                        'end' => $ev->start_date,
                        'color' => $ev->color,
                        'textColor' => $ev->text_color,
                    ];
                }

            }
        }

        return view('engineer_company.calender', compact('data', 'events', 'todos_pending', 'todos_completed'));
    }


    public function EngineerCompanyLogout($role)
    {

        auth($role)->logout();

        if ($role == 'admin') {
            return redirect()->route('admin.AdminLogin');
        }

        if ($role == 'engineer_company') {
            return redirect()->route('ec.GetECLogin');
        }

        if ($role == 'engineer') {
            return redirect()->route('e.GetECLogin');
        }

        if ($role == 'web') {
            return redirect()->route('customer-login');
        }

    }

    public function GetQuoteManagement($uid)
    {
        $customer = CustomerInfo::where('user_uid', $uid)->first();
        if ($customer) {
            return view('engineer_company.quote_management', compact('customer'));
        }
        abort(404);

    }

    public function AddQuote($uid)
    {
        $customer = CustomerInfo::where('user_uid', $uid)->first();
        if ($customer) {
            return view('engineer_company.add_quotation', compact('customer'));
        }
        abort(404);
    }

    function ViewQuote($id)
    {
        $quote = Quotation::where('id', $id)->first();
        if ($quote) {
            return view('engineer_company.view_quote_management', compact('quote'));
        }
        abort(404);
    }

    public function PDFQuote($id)
    {
        $quote = Quotation::where('id', $id)->first();

//        $html = view('engineer_company.templates.quote_view_template',compact('quote'))->render();
//
//        $pdf = PDF::loadHTML($html);
//        return $pdf->stream('resume.pdf');

        if ($quote) {
            return view('engineer_company.templates.quote_view_template', compact('quote'));
        }
        abort(404);
    }
}
