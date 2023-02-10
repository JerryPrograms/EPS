<?php

namespace App\Http\Controllers\engineercompany;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerInfo;
use App\Models\MonthlyRegularInspection;

class InspectionController extends Controller
{
    public function regular_inspection_log($uid){
        $customer = CustomerInfo::with(['BuildingInformation','MonthlyRegularInspection'])->where('user_uid',$uid)->first();
        return view('engineer_company.regular_inspection_log',compact('customer'));
    }

    public function write_regular_inspection_log($uid){
        $customer = CustomerInfo::with(['BuildingInformation','ParkingFacilityCertificate'])->where('user_uid',$uid)->first();
        if(!empty($customer->ParkingFacilityCertificate)){
            if($customer->ParkingFacilityCertificate->type == 'flat_reciprocating_type'){

                $file_content = file_get_contents(public_path('machine_types/flat_reciprocating_type.json'));

            }else if($customer->ParkingFacilityCertificate->type == 'elevator_type'){

                $file_content = file_get_contents(public_path('machine_types/elevator_type.json'));

            }else if($customer->ParkingFacilityCertificate->type == 'vertical_circulation'){

                $file_content = file_get_contents(public_path('machine_types/vertical_circulation.json'));

            }else if($customer->ParkingFacilityCertificate->type == 'multi_floor_circulation'){

                $file_content = file_get_contents(public_path('machine_types/multi_floor_circulation.json'));
            }
        }else{

            $file_content = null;

        }

        if(!empty($file_content)){
            $file_content = json_decode($file_content);
        }
        // dd($file_content);
        // dd($customer);
        return view('engineer_company.write_regular_inspection_log',compact('customer','file_content'));
    }

    public function save_inspection_action(Request $request){
        $validate = \Validator::make($request->all(),[
	        'inspection_date' => 'required',
	        'arrival_time' => 'required',
	        'completion_time' => 'required',
	        'inspection_manager' => 'required',
            'inspection' => 'required',
            'special_notes' => 'required',
            'signature' => 'required'
	    ]);
	    if($validate->fails())
	    {
	    	return response()->json(["success" => false , 'message' => $validate->errors()->first()]);
	    }
        
        $inspectionSave = MonthlyRegularInspection::create([
            'customer_id' => $request->user_uid,
            'inspection_date' => $request->inspection_date,
            'arrival_time' => $request->arrival_time,
            'completion_time' => $request->completion_time,
            'inspection_manager' => $request->inspection_manager,
            'check_contents' => json_encode($request->inspection),
            'special_notes' => $request->special_notes,
            'signature' => $request->signature
        ]);

        if($inspectionSave){
            return json_encode(['success' => true, 'message' => 'Inspection saved successfuly']);
        }else{
            return json_encode(['success' => false, 'message' => 'Error : Please try again']);
        }
    }
}
