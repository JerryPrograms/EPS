<?php

namespace App\Http\Controllers\engineercompany;

use App\Http\Controllers\Controller;
use App\Models\BuildingAddress;
use App\Models\CustomerInfo;
use App\Models\DispatchInformationData;
use App\Models\Engineer;
use App\Models\Engineer_company;
use App\Models\Events;
use App\Models\KeyAccessoryInformation;
use App\Models\MainPartModel;
use App\Models\PartReplacementHistoryModel;
use App\Models\Quotation;
use App\Models\Todo;
use Illuminate\Http\Request;

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

        $counter = 10;
        if (activeGuard() == 'admin') {
            $limit = 10;
            $page = 1;
            $totalRecords = CustomerInfo::count();
            if (request()->has('page')) {
                $page = request()->get('page');
            }

            if ($totalRecords > $limit) {
                $counter = $totalRecords - (($page - 1) * $limit);
            } else {
                $counter = $totalRecords;
            }


            $customer = CustomerInfo::latest()->paginate($limit);
        } else if (activeGuard() == 'engineer') {


            $limit = 10;
            $companies = Engineer_company::where('id', auth(activeGuard())->user()->affiliated_company)->first();
            $customer = CustomerInfo::orWhere(function ($query) use ($companies) {
                $query->where('added_by', 'engineer_company')
                    ->where('added_by_id', $companies->id);
            })->orWhere(function ($query) {
                $query->where('added_by', activeGuard())
                    ->where('added_by_id', auth(activeGuard())->id());
            })->latest();


            $page = 1;
            $totalRecords = $customer->count();
            $customer = $customer->paginate($limit);
            if (request()->has('page')) {
                $page = request()->get('page');
            }

            if ($totalRecords > $limit) {
                $counter = $totalRecords - (($page - 1) * $limit);
            } else {
                $counter = $totalRecords;
            }
        } else {
            $limit = 10;
            $engineers = Engineer::where('affiliated_company', auth(activeGuard())->id())->pluck('id');
            $customer = CustomerInfo::orWhere(function ($query) use ($engineers) {
                $query->where('added_by', 'engineer')
                    ->whereIn('added_by_id', $engineers);
            })->orWhere(function ($query) {
                $query->where('added_by', activeGuard())
                    ->where('added_by_id', auth(activeGuard())->id());
            })->latest();
            $totalRecords = $customer->count();
            $customer = $customer->paginate($limit);
            $page = 1;


            if (request()->has('page')) {
                $page = request()->get('page');
            }

            if ($totalRecords > $limit) {
                $counter = $totalRecords - (($page - 1) * $limit);
            } else {
                $counter = $totalRecords;
            }

        }
        return view('engineer_company.customer_list', compact('customer', 'counter'));
    }

    public function CreateBuildingInfo($uid)
    {
        $customer = CustomerInfo::where('user_uid', $uid)->first();
        if ($customer) {
            $buildings = BuildingAddress::where('status',0)->latest()->get();
            $company = Engineer_company::latest()->get();
            return view('engineer_company.building_info', compact('customer', 'buildings', 'company'));
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
            $main_part = MainPartModel::pluck('customer_id')->toArray();

            $main_part = array_unique($main_part);

            $buildings = CustomerInfo::where('id', '!=', $customer->id)->whereIn('id', $main_part)->with(['BuildingInformation'])->latest()->get();
            
            foreach ($buildings as $building) {
                $building->building_information = CustomerInfo::GetBuildingInformation($building->building_id);
            }

            return view('engineer_company.key_accessory', compact('customer', 'buildings'));
        }
        abort(404);

    }

    public function CreatePartsReplacementHistory($uid)
    {
        $customer = CustomerInfo::where('user_uid', $uid)->first();
        if ($customer) {

            $main_parts = MainPartModel::with('SubParts')->where('customer_id', $customer->id)->get();
            $sub_parts = KeyAccessoryInformation::whereIn('main_part_id', $main_parts->pluck('id'))->latest()->get();
            return view('engineer_company.parts_replacement_history', compact('sub_parts', 'customer', 'main_parts'));
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

        $twoMonthsAgo = \Carbon\Carbon::now()->subMonths(2);

        Todo::whereDate('created_at', '<', $twoMonthsAgo)
            ->where('status', 1)
            ->delete();


        if (activeGuard() == 'admin') {
            $events = Events::where('status', 0)->latest()->get();
            $todos_pending = Todo::where('status', 0)->latest()->get();
            $todos_completed = Todo::where('status', 1)->latest()->get();
        } else if (activeGuard() == 'engineer') {

            $company = Engineer_company::where('id', auth(activeGuard())->user()->affiliated_company)->first();


            $events = Events::orWhere(function ($query) use ($company) {

                $query->where('added_by', activeGuard())->where('user_id', $company->id);

            })->orWhere(function ($query) use ($company) {

                $query->where('added_by', 'engineer_company')->where('user_id', $company->id);

            })->where('status', 0)->latest()->get();


            $todos_pending = Todo::where('status', 0)->where('user_id', auth(activeGuard())->user()->id)->where('added_by', activeGuard())->latest()->get();
            $todos_completed = Todo::where('status', 1)->where('user_id', auth(activeGuard())->user()->id)->where('added_by', activeGuard())->latest()->get();
        } else {


            $engineers = Engineer::where('affiliated_company', auth(activeGuard())->user()->id)->pluck('id');


            $events = Events::orWhere(function ($query) {

                $query->where('added_by', activeGuard())->where('user_id', auth(activeGuard())->user()->id);

            })->orWhere(function ($query) use ($engineers) {

                $query->where('added_by', 'engineer')->whereIn('user_id', $engineers);

            })->where('status', 0)->latest()->get();


            $todos_pending = Todo::where('status', 0)->where('user_id', auth(activeGuard())->user()->id)->where('added_by', activeGuard())->latest()->get();
            $todos_completed = Todo::where('status', 1)->where('user_id', auth(activeGuard())->user()->id)->where('added_by', activeGuard())->latest()->get();


        }

        $data = array();

        if (count($events) > 0) {
            foreach ($events as $ev) {

                $building_names = BuildingAddress::whereIn('id', json_decode($ev->title))->pluck('building_name')->toArray();


                if (!empty($ev->end_date)) {
                    $data[] = [
                        'id' => $ev->id,
                        'title' => implode(',', $building_names),
                        'start' => $ev->start_date,
                        'end' => $ev->end_date,
                        'color' => $ev->color,
                        'textColor' => $ev->text_color,
                        'status' => $ev->status,
                    ];
                } else {
                    $data[] = [
                        'id' => $ev->id,
                        'title' => implode(',', $building_names),
                        'start' => $ev->start_date,
                        'end' => $ev->start_date,
                        'color' => $ev->color,
                        'textColor' => $ev->text_color,
                        'status' => $ev->status,
                    ];
                }

            }
        }

        $building_names = BuildingAddress::latest()->get();

        return view('engineer_company.calender', compact('building_names', 'data', 'events', 'todos_pending', 'todos_completed'));
    }

    public function GetCalenderCompany($id)
    {

        $twoMonthsAgo = \Carbon\Carbon::now()->subMonths(2);

        Todo::whereDate('created_at', '<', $twoMonthsAgo)
            ->where('status', 1)
            ->delete();
        $engineers = Engineer::where('affiliated_company', $id)->pluck('id');


        $events = Events::orWhere(function ($query) use ($id) {

            $query->where('added_by', 'engineer_company')->where('user_id', $id);

        })->orWhere(function ($query) use ($engineers) {

            $query->where('added_by', 'engineer')->whereIn('user_id', $engineers);

        })->where('status', 0)->latest()->get();


        $todos_pending = Todo::where('status', 0)->where('user_id', auth(activeGuard())->user()->id)->where('added_by', activeGuard())->latest()->get();
        $todos_completed = Todo::where('status', 1)->where('user_id', auth(activeGuard())->user()->id)->where('added_by', activeGuard())->latest()->get();


        $data = array();

        if (count($events) > 0) {
            foreach ($events as $ev) {

                $building_names = BuildingAddress::whereIn('id', json_decode($ev->title))->pluck('building_name')->toArray();


                if (!empty($ev->end_date)) {
                    $data[] = [
                        'id' => $ev->id,
                        'title' => implode(',', $building_names),
                        'start' => $ev->start_date,
                        'end' => $ev->end_date,
                        'color' => $ev->color,
                        'textColor' => $ev->text_color,
                        'status' => $ev->status,
                    ];
                } else {
                    $data[] = [
                        'id' => $ev->id,
                        'title' => implode(',', $building_names),
                        'start' => $ev->start_date,
                        'end' => $ev->start_date,
                        'color' => $ev->color,
                        'textColor' => $ev->text_color,
                        'status' => $ev->status,
                    ];
                }

            }
        }

        $building_names = BuildingAddress::latest()->get();

        return view('engineer_company.calender', compact('building_names', 'data', 'events', 'todos_pending', 'todos_completed'));
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

    public function AddQuote($uid = null)
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

    public function GetECDashboard($id)
    {
        $company = Engineer_company::where('id', $id)->first();
        if ($company) {
            return view('engineer_company.engineer_dashboard', compact('company'));
        } else {
            abort(404);
        }
    }

    public function GetPartsData(Request $request)
    {
        $rc = PartReplacementHistoryModel::where('id', $request->id)->first();
        $mp = MainPartModel::where('customer_id', $rc->customer_id)->get();
        $sub_part = KeyAccessoryInformation::whereIn('main_part_id', $mp->pluck('id'))->get();
        return json_encode([
            'rc' => $rc,
            'mp' => $mp,
            'sp' => $sub_part,
            'Error' => false,
            'Message' => 'Data fetched',
        ]);
    }

    public function EditPartsReplacement(Request $request)
    {
        try {
            $get_data = PartReplacementHistoryModel::where('id', $request->id)->first();
            if($get_data->age > 3){
                return json_encode([
                    'success' => false,
                    'message' => __('translation.Part history cannot be edited after 3 days'),
                ]);
            }
            PartReplacementHistoryModel::where('id', $request->id)->update($request->except(['_token', 'id']));
            return json_encode([
                'success' => true,
                'message' => __('translation.Data Updated'),
            ]);
        } catch (\Exception $ex) {
            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public function DeleteDispatchInformation(Request $request){
        try {
            $delRecord = DispatchInformationData::where('id',$request->id)->delete();
            return json_encode([
                'success' => true,
                'message' => __('translation.Record deleted successfully')
            ]);
        } catch (\Throwable $th) {
            return json_encode([
                'success' => true,
                'message' => __('translation.Error, Please try again later')
            ]);
        }
    }
}
