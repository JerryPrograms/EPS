<?php

namespace App\Http\Controllers;

use App\Models\ASInformation;
use App\Models\CustomerInfo;
use App\Models\Engineer_company;
use Illuminate\Http\Request;

class EngineerCompanyController extends Controller
{
    public function engineer_companies()
    {
        $engineer_companies = Engineer_company::paginate(10);
        return view('engineer_company.engineer_companies', compact('engineer_companies'));
    }

    public function add_engineer_company()
    {
        return view('engineer_company.add_engineer_company');
    }

    public function add_engineer_company_action(Request $request)
    {
        $validate = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:3',
            'phone' => 'required',
            'address' => 'required',
            'manager_name' => 'required'
        ]);
        if ($validate->fails()) {
            return response()->json(["success" => false, 'message' => $validate->errors()->first()]);
        }
        try {
            $regiterEngineerCompany = Engineer_company::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => \Hash::make($request->password),
                'phone' => $request->phone,
                'address' => $request->address,
                'manager_name' => $request->manager_name
            ]);

            return json_encode(['success' => true, 'message' => __('translation.Engineer company added successfully')]);

        } catch (\Throwable $th) {
            return json_encode(['success' => false, 'message' => __('translation.Error : Please try again later')]);
        }
    }

    public function edit_engineer_company($id)
    {
        $engineer_company = Engineer_company::where('id', $id)->first();
        return view('engineer_company.edit_engineer_company', compact('engineer_company'));
    }

    public function edit_engineer_company_action(Request $request)
    {
        $validate = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'manager_name' => 'required',
            'contract_number' => 'required'
        ]);
        if ($validate->fails()) {
            return response()->json(["success" => false, 'message' => $validate->errors()->first()]);
        }
        try {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'manager_name' => $request->manager_name,
                'contract_number' => $request->contract_number
            ];
            if ((isset($request->password)) && !empty($request->password)) {
                $data['password'] = \Hash::make($request->password);
            }
            $editEngineer = Engineer_company::where('id', $request->id)->update($data);

            return json_encode(['success' => true, 'message' => 'Engineer company details edited successfully']);

        } catch (\Throwable $th) {

            return json_encode(['success' => false, 'message' => __('translation.Error : Please try again later')]);

        }
    }

    public function del_engineer_company_action(Request $request)
    {
        $delEngineerCompanyAction = Engineer_company::where('id', $request->del_id)->delete();

        if ($delEngineerCompanyAction) {
            return json_encode(['success' => true, 'message' => __('translation.Record deleted successfully')]);
        } else {
            return json_encode(['success' => false, 'message' => __('translation.Error : Please try again')]);
        }
    }

    public function ASCompanyList()
    {
        $customers = CustomerInfo::where('added_by', activeGuard())->where('added_by_id', auth(activeGuard())->id())->pluck('id');
        $as_information = ASInformation::whereIn('customer_id', $customers)->paginate(10);
        return view('engineer_company.as_company_list', compact('as_information'));
    }

    public function GetEngineerCompanyData(Request $request)
    {
        $company = Engineer_company::where('id', $request->id)->first();

        return json_encode([
            'Error' => false,
            'Message' => 'Found',
            'Data' => $company
        ]);

    }


}
