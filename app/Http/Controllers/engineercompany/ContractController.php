<?php

namespace App\Http\Controllers\engineercompany;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerInfo;
use App\Models\Contract;

class ContractController extends Controller
{
    public function contract_management_list($id){
        $contracts = Contract::with('get_customer')->where('customer_id',$id)->paginate(10);
        $customer = CustomerInfo::where('user_uid',$id)->first();
        return view('engineer_company.contract_management_list',compact('contracts','customer'));
    }

    public function add_contract($uid){
        $customer = CustomerInfo::with('BuildingInformation')->where('user_uid',$uid)->first();
        return view('engineer_company.add_contract',compact('customer'));
    }

    public function contract_view(){
        return view('engineer_company.contract_view');
    }

     public function add_contract_action(Request $request){
        $validate = \Validator::make($request->all(),[
	        'contract_type' => 'required',
	        'contract_date' => 'required',
	        'contract_description' => 'required',
	        'contract_file' => ['required','mimes:pdf']
	    ]);
	    if($validate->fails())
	    {
	    	return response()->json(["success" => false , 'message' => $validate->errors()->first()]);
	    }

        try {
            $contract_file = saveFiles(time() . mt_rand(300, 9000), 'contracts', $request->contract_file);

            $save_contract = Contract::create([
                'customer_id' => $request->customer_id,
                'type' => $request->contract_type,
                'contract_date' => $request->contract_date,
                'contract_file' => $contract_file,
                'contract_description' => $request->contract_description
            ]);

            return json_encode(['success' => true, 'message' => 'Contract saved successfuly']);

        } catch (\Throwable $th) {
            return json_encode(['success' => false, 'message' => 'Error : please try again']);
        }
        
     }
}
