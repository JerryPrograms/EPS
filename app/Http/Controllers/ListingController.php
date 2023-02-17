<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DispatchInformationData;
use App\Models\MonthlyRegularInspection;
use App\Models\Quotation;

class ListingController extends Controller
{
    // Dispactch confirmation Listing
    public function distpatch_confirmation_listing(){
        $dispatch_information_data = DispatchInformationData::paginate(10);
        return view('engineer_company.distpatch_confirmation_listing',compact('dispatch_information_data'));
    }

    public function del_dispatch_confirmation_record(Request $request){
        $del_record = DispatchInformationData::with('GetCustomer')->where('id',$request->del_id)->delete();
        if($del_record){
            return json_encode(['success'=> true , 'message' => 'Record deleted successfully']);
        }else{
            return json_encode(['success'=> false , 'message' => 'Error : Please try again']);
        }
    }

    // Regular inspection management
    public function regular_inspection_logs(){
        $logs = MonthlyRegularInspection::with('getCustomer')->paginate(10);
        return view('engineer_company.regular_inspection_logs',compact('logs'));
    }

    public function del_regular_inspection_log(Request $request){
        $delRegularInspection = MonthlyRegularInspection::where('id',$request->del_id)->delete();
        if($delRegularInspection){
            return json_encode(['success'=> true , 'message' => 'Record deleted successfully']);
        }else{
            return json_encode(['success'=> false , 'message' => 'Error : Please try again']);
        }
    }


    // Quotation Management
    public function quotation_management(){
        $quotations = Quotation::with('GetQuoteContent','getCustomer')->paginate(10);
        return view('engineer_company.quotation_management',compact('quotations'));
    }
}
