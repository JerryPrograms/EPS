<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\CustomerInfo;
use App\Models\DispatchInformationData;
use App\Models\Engineer;
use App\Models\Engineer_company;
use App\Models\MonthlyRegularInspection;
use App\Models\Quotation;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Dispactch confirmation Listing
    public function distpatch_confirmation_listing()
    {


        if (activeGuard() == 'web') {
            $dispatch_information_data = DispatchInformationData::where('customer_id', auth('web')->id())->paginate(10);
        } else if (activeGuard() == 'admin') {
            $dispatch_information_data = DispatchInformationData::paginate(10);
        } else if (activeGuard() == 'engineer') {
            $companies = Engineer_company::where('id', auth(activeGuard())->user()->affiliated_company)->first();
            $customers = CustomerInfo::where(function ($query) use ($companies) {
                $query->where('added_by', 'engineer_company')
                    ->where('added_by_id', $companies->id);
            })->orwhere(function ($query) {
                $query->where('added_by', activeGuard())
                    ->where('added_by_id', auth(activeGuard())->id());
            })->latest()->pluck('id');
            $dispatch_information_data = DispatchInformationData::whereIn('customer_id', $customers)->paginate(10);
        } else {
            $engineers = Engineer::where('affiliated_company', auth(activeGuard())->id())->first();
            $customers = CustomerInfo::where(function ($query) use ($engineers) {
                $query->where('added_by', 'engineer')
                    ->where('added_by_id', $engineers->id);
            })->orwhere(function ($query) {
                $query->where('added_by', activeGuard())
                    ->where('added_by_id', auth(activeGuard())->id());
            })->latest()->pluck('id');
            $dispatch_information_data = DispatchInformationData::whereIn('customer_id', $customers)->paginate(10);
        }
        return view('engineer_company.distpatch_confirmation_listing', compact('dispatch_information_data'));
    }

    public function del_dispatch_confirmation_record(Request $request)
    {
        $del_record = DispatchInformationData::with('GetCustomer')->where('id', $request->del_id)->delete();
        if ($del_record) {
            return json_encode(['success' => true, 'message' => __('translation.Record deleted successfully')]);
        } else {
            return json_encode(['success' => false, 'message' => __('translation.Error : Please try again')]);
        }
    }

    // Regular inspection management
    public function regular_inspection_logs()
    {
        if (activeGuard() == 'web') {
            $logs = MonthlyRegularInspection::where('customer_id', auth('web')->id())->with('getCustomer')->paginate(10);
        } else if (activeGuard() == 'admin') {
            $logs = MonthlyRegularInspection::with('getCustomer')->paginate(10);
        } else if (activeGuard() == 'engineer') {
            $companies = Engineer_company::where('id', auth(activeGuard())->user()->affiliated_company)->first();
            $customers = CustomerInfo::where(function ($query) use ($companies) {
                $query->where('added_by', 'engineer_company')
                    ->where('added_by_id', $companies->id);
            })->orwhere(function ($query) {
                $query->where('added_by', activeGuard())
                    ->where('added_by_id', auth(activeGuard())->id());
            })->latest()->pluck('id');
            $logs = MonthlyRegularInspection::whereIn('customer_id', $customers)->with('getCustomer')->paginate(10);

        } else {
            $engineers = Engineer::where('affiliated_company', auth(activeGuard())->id())->first();
            $customers = CustomerInfo::where(function ($query) use ($engineers) {
                $query->where('added_by', 'engineer')
                    ->where('added_by_id', $engineers->id);
            })->orwhere(function ($query) {
                $query->where('added_by', activeGuard())
                    ->where('added_by_id', auth(activeGuard())->id());
            })->latest()->pluck('id');
            $logs = MonthlyRegularInspection::whereIn('customer_id', $customers)->with('getCustomer')->paginate(10);
        }

        return view('engineer_company.regular_inspection_logs', compact('logs'));
    }

    public function del_regular_inspection_log(Request $request)
    {
        $delRegularInspection = MonthlyRegularInspection::where('id', $request->del_id)->delete();
        if ($delRegularInspection) {
            return json_encode(['success' => true, 'message' => __('translation.Record deleted successfully')]);
        } else {
            return json_encode(['success' => false, 'message' => __('translation.Error : Please try again')]);
        }
    }

    // Contract Management
    public function contract_management()
    {
        if (activeGuard() == 'web') {
            $contracts = Contract::where('customer_id', auth('web')->id())->with('get_customer')->paginate(10);
        } else if (activeGuard() == 'admin') {
            $contracts = Contract::with('get_customer')->paginate(10);
        } else if (activeGuard() == 'engineer') {
            $companies = Engineer_company::where('id', auth(activeGuard())->user()->affiliated_company)->first();
            $customers = CustomerInfo::where(function ($query) use ($companies) {
                $query->where('added_by', 'engineer_company')
                    ->where('added_by_id', $companies->id);
            })->orwhere(function ($query) {
                $query->where('added_by', activeGuard())
                    ->where('added_by_id', auth(activeGuard())->id());
            })->latest()->pluck('id');
            $contracts = Contract::whereIn('customer_id', $customers)->with('get_customer')->paginate(10);
        } else {
            $engineers = Engineer::where('affiliated_company', auth(activeGuard())->id())->first();
            $customers = CustomerInfo::where(function ($query) use ($engineers) {
                $query->where('added_by', 'engineer')
                    ->where('added_by_id', $engineers->id);
            })->orwhere(function ($query) {
                $query->where('added_by', activeGuard())
                    ->where('added_by_id', auth(activeGuard())->id());
            })->latest()->pluck('id');
            $contracts = Contract::whereIn('customer_id', $customers)->with('get_customer')->paginate(10);
        }

        return view('engineer_company.contract_management', compact('contracts'));
    }

    // Quotation Management
    public function quotation_management()
    {
        if (activeGuard() == 'web') {
            $quotations = Quotation::where('customer_id', auth('web')->id())->with('GetQuoteContent', 'getCustomer')->paginate(10);
        } else if (activeGuard() == 'admin') {
            $quotations = Quotation::with('GetQuoteContent', 'getCustomer')->paginate(10);
        } else if (activeGuard() == 'engineer') {
            $companies = Engineer_company::where('id', auth(activeGuard())->user()->affiliated_company)->first();
            $customers = CustomerInfo::where(function ($query) use ($companies) {
                $query->where('added_by', 'engineer_company')
                    ->where('added_by_id', $companies->id);
            })->orwhere(function ($query) {
                $query->where('added_by', activeGuard())
                    ->where('added_by_id', auth(activeGuard())->id());
            })->latest()->pluck('id');
            $quotations = Quotation::whereIn('customer_id', $customers)->with('GetQuoteContent', 'getCustomer')->paginate(10);
        } else {
            $engineers = Engineer::where('affiliated_company', auth(activeGuard())->id())->first();
            $customers = CustomerInfo::where(function ($query) use ($engineers) {
                $query->where('added_by', 'engineer')
                    ->where('added_by_id', $engineers->id);
            })->orwhere(function ($query) {
                $query->where('added_by', activeGuard())
                    ->where('added_by_id', auth(activeGuard())->id());
            })->latest()->pluck('id');
            $quotations = Quotation::whereIn('customer_id', $customers)->with('GetQuoteContent', 'getCustomer')->paginate(10);
        }

        return view('engineer_company.quotation_management', compact('quotations'));
    }
}
