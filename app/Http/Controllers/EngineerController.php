<?php

namespace App\Http\Controllers;

use App\Models\Engineer;
use App\Models\Engineer_company;
use Illuminate\Http\Request;

class EngineerController extends Controller
{
    public function add_engineer()
    {
        $engineer_companies = Engineer_company::get();
        return view('engineer_company.add_engineer', compact('engineer_companies'));
    }

    public function add_engineer_company($id)
    {
        $engineer_companies = Engineer_company::where('id', $id)->first();
        return view('engineer_company.add_engineer', compact('engineer_companies'));
    }

    public function engineers()
    {
        if (activeGuard() == 'admin') {
            $engineers = Engineer::with('getEngineerCompany')->paginate(10);
        } else {
            $engineers = Engineer::where('affiliated_company', auth(activeGuard())->id())->with('getEngineerCompany')->paginate(10);
        }
        return view('engineer_company.engineers', compact('engineers'));
    }

    public function engineers_company($id)
    {
        $engineers = Engineer::where('affiliated_company', $id)->with('getEngineerCompany')->paginate(10);
        $company = Engineer_company::where('id', $id)->first();
        return view('engineer_company.engineers', compact('engineers', 'company'));
    }

    public function add_engineer_action(Request $request)
    {

        $validate = \Validator::make($request->all(), [
            'company_name' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'password' => 'required|min:3',
            'email' => 'required|email|unique:engineers'
        ]);
        if ($validate->fails()) {
            return response()->json(["success" => false, 'message' => $validate->errors()->first()]);
        }
        try {


            $regiterEngineer = Engineer::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'password' => \Hash::make($request->password),
                'affiliated_company' => $request->company_name,
                'email' => $request->email,
                'pwd' => $request->password,
                'rank' => $request->rank,
                'social_security' => $request->social_security,
                'approval_rights' => $request->approval_rights,
            ]);

            return json_encode(['success' => true, 'message' => __('translation.Engineer registered successfully')]);

        } catch (\Throwable $th) {
            return json_encode(['success' => false, 'message' => __('translation.Error : Please try again later')]);
        }
    }

    public function edit_engineer($id)
    {
        $engineer_companies = Engineer_company::get();
        $engineer = Engineer::where('id', $id)->with('getEngineerCompany')->first();
        return view('engineer_company.edit_engineer', compact('engineer_companies', 'engineer'));
    }

    public function edit_engineer_action(Request $request)
    {
        $validate = \Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email'
        ]);
        if ($validate->fails()) {
            return response()->json(["success" => false, 'message' => $validate->errors()->first()]);
        }

        $previous = Engineer::where('id', $request->id)->first();


        try {
            $data = [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'rank' => $request->rank,
                'social_security' => $request->social_security,
                'approval_rights' => $request->approval_rights,
            ];
            if ((isset($request->password)) && !empty($request->password)) {
                $data['password'] = \Hash::make($request->password);
                $data['pwd'] = $request->password;
            }
            $editEngineer = Engineer::where('id', $request->id)->update($data);

            return json_encode(['success' => true, 'message' => __('translation.Engineer edited successfully')]);

        } catch (\Throwable $th) {
            return json_encode(['success' => false, 'message' => __('translation.Error : Please try again later')]);

        }
    }

    public function del_engineer_action(Request $request)
    {
        $delEngineerAction = Engineer::where('id', $request->del_id)->delete();
        if ($delEngineerAction) {
            return json_encode(['success' => true, 'message' => __('translation.Record deleted successfully')]);
        } else {
            return json_encode(['success' => false, 'message' => __('translation.Error : Please try again')]);
        }
    }
}
