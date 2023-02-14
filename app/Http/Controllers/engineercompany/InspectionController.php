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
            'output' => 'required'
	    ]);
	    if($validate->fails())
	    {
	    	return response()->json(["success" => false , 'message' => $validate->errors()->first()]);
	    }

        $base64_str = substr($request->output, strpos($request->output, ",") + 1);
        $image = base64_decode($base64_str);
        $safeName = \Str::random(10) . '.' . 'png';
        \Storage::disk('public')->put('engineer_company/inspection/' . $safeName, $image);
        $signature = 'storage/engineer_company/inspection/' . $safeName;
        
        $inspectionSave = MonthlyRegularInspection::create([
            'customer_id' => $request->user_uid,
            'inspection_date' => $request->inspection_date,
            'arrival_time' => $request->arrival_time,
            'completion_time' => $request->completion_time,
            'inspection_manager' => $request->inspection_manager,
            'check_contents' => json_encode($request->inspection),
            'special_notes' => $request->special_notes,
            'signature' => $signature,
            'type' => $request->machine_type
        ]);

        if($inspectionSave){
            return json_encode(['success' => true, 'message' => 'Inspection saved successfuly']);
        }else{
            return json_encode(['success' => false, 'message' => 'Error : Please try again']);
        }
    }

    public function edit_regular_inspection_log($id){
        $customer = MonthlyRegularInspection::with('getCustomer')->where('id',$id)->first();
        if(!empty($customer->type)){
            if($customer->type == 'flat_reciprocating_type'){

                $file_content = file_get_contents(public_path('machine_types/flat_reciprocating_type.json'));

            }else if($customer->type == 'elevator_type'){

                $file_content = file_get_contents(public_path('machine_types/elevator_type.json'));

            }else if($customer->type == 'vertical_circulation'){

                $file_content = file_get_contents(public_path('machine_types/vertical_circulation.json'));

            }else if($customer->type == 'multi_floor_circulation'){

                $file_content = file_get_contents(public_path('machine_types/multi_floor_circulation.json'));
            }
        }else{

            $file_content = null;

        }
        if(!empty($file_content)){
            $file_content = json_decode($file_content);
        }
        return view('engineer_company.edit_regular_inspection_log',compact('customer','file_content'));
    }

    public function edit_inspection_action(Request $request){
        $validate = \Validator::make($request->all(),[
	        'inspection_date' => 'required',
	        'arrival_time' => 'required',
	        'completion_time' => 'required',
	        'inspection_manager' => 'required',
            'inspection' => 'required',
            'special_notes' => 'required',
	    ]);
	    if($validate->fails())
	    {
	    	return response()->json(["success" => false , 'message' => $validate->errors()->first()]);
	    }
        $inspectionEdit = MonthlyRegularInspection::where('id',$request->inspection_id)->update([
            'inspection_date' => $request->inspection_date,
            'arrival_time' => $request->arrival_time,
            'completion_time' => $request->completion_time,
            'inspection_manager' => $request->inspection_manager,
            'check_contents' => json_encode($request->inspection),
            'special_notes' => $request->special_notes,
        ]);

        if($inspectionEdit){
            return json_encode(['success' => true, 'message' => 'Inspection edited successfuly']);
        }else{
            return json_encode(['success' => false, 'message' => 'Error : Please try again']);
        }
    }

    public function view_regular_inspection_log($id){
        $customer = MonthlyRegularInspection::with('getCustomer')->where('id',$id)->first();
        // dd($customer);
        if(!empty($customer->getCustomer->ParkingFacilityCertificate)){
            if($customer->getCustomer->ParkingFacilityCertificate->type == 'flat_reciprocating_type'){

                $file_content = file_get_contents(public_path('machine_types/flat_reciprocating_type.json'));

            }else if($customer->getCustomer->ParkingFacilityCertificate->type == 'elevator_type'){

                $file_content = file_get_contents(public_path('machine_types/elevator_type.json'));

            }else if($customer->getCustomer->ParkingFacilityCertificate->type == 'vertical_circulation'){

                $file_content = file_get_contents(public_path('machine_types/vertical_circulation.json'));

            }else if($customer->getCustomer->ParkingFacilityCertificate->type == 'multi_floor_circulation'){

                $file_content = file_get_contents(public_path('machine_types/multi_floor_circulation.json'));
            }
        }else{

            $file_content = null;

        }
        if(!empty($file_content)){
            $file_content = json_decode($file_content);
        }
        return view('engineer_company.view_regular_inspection_log',compact('customer','file_content'));
    }
}
