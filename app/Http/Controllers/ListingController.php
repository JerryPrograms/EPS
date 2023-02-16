<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DispatchInformationData;

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
}
