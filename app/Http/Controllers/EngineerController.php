<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Engineer_company;
use App\Models\Engineer;

class EngineerController extends Controller
{
    public function add_engineer(){
        $engineer_companies = Engineer_company::get();
        return view('engineer_company.add_engineer',compact('engineer_companies'));
    }

    public function engineers(){
        $engineers = Engineer::with('getEngineerCompany')->paginate(10);
        return view('engineer_company.engineers',compact('engineers'));
    }

    public function add_engineer_action(Request $request){
        $validate = \Validator::make($request->all(),[
	        'company_name' => 'required',
	        'name' => 'required',
	        'phone' => 'required',
	        'password' => 'required|min:3',
            'id' => 'required',
            'email' => 'required|email'
	    ]);
	    if($validate->fails())
	    {
	    	return response()->json(["success" => false , 'message' => $validate->errors()->first()]);
	    }
        try {
            $regiterEngineer = Engineer::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'password' => \Hash::make($request->password),
                'affiliated_company' => $request->company_name,
                'email' => $request->email
            ]);

            return json_encode(['success' => true, 'message' => 'Engineer registered successfuly']);

        } catch (\Throwable $th) {
            return json_encode(['success' => false, 'message' => 'Error : Please try again later' ]);
        }
    }

    public function edit_engineer($id){
        $engineer_companies = Engineer_company::get();
        $engineer = Engineer::with('getEngineerCompany')->first();
        return view('engineer_company.edit_engineer',compact('engineer_companies','engineer'));
    }

    public function edit_engineer_action(Request $request){
        $validate = \Validator::make($request->all(),[
	        'company_name' => 'required',
	        'name' => 'required',
	        'phone' => 'required',
            'email' => 'required|email'
	    ]);
	    if($validate->fails())
	    {
	    	return response()->json(["success" => false , 'message' => $validate->errors()->first()]);
	    }
        try {
            $data = [
                'affiliated_company' => $request->company_name,
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email
            ];
            if((isset($request->password)) && !empty($request->password)){
                $data['password'] = \Hash::make($request->password);
            }
            $editEngineer = Engineer::where('id', $request->id)->update($data);

            return json_encode(['success' => true, 'message' => 'Engineer edited successfuly']);

        } catch (\Throwable $th) {

            return json_encode(['success' => false, 'message' => 'Error : Please try again later' ]);

        }
    }

    public function del_engineer_action(Request $request){
        $delEngineerAction = Engineer::where('id',$request->del_id)->delete();
        if($delEngineerAction){
            return json_encode(['success'=> true , 'message' => 'Record deleted successfully']);
        }else{
            return json_encode(['success'=> false , 'message' => 'Error : Please try again']);
        }
    }
}
