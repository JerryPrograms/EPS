<?php

namespace App\Http\Controllers\engineercompany;

use App\Http\Controllers\Controller;
use App\Models\Contract;
use App\Models\CustomerInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function contract_management_list($id)
    {
        $contracts = Contract::with('get_customer')->where('customer_id', $id)->paginate(10);
        $customer = CustomerInfo::where('id', $id)->first();
        return view('engineer_company.contract_management_list', compact('contracts', 'customer'));
    }

    public function add_contract($uid)
    {
        $customer = CustomerInfo::with('BuildingInformation')->where('user_uid', $uid)->first();
        return view('engineer_company.add_contract', compact('customer'));
    }

    public function contract_view()
    {
        return view('engineer_company.contract_view');
    }

    public function add_contract_action(Request $request)
    {
        $validate = \Validator::make($request->all(), [
            'contract_type' => 'required',
            'contract_date' => 'required',
            'contract_description' => 'required',
            'contract_file' => ['required', 'mimes:pdf']
        ]);
        if ($validate->fails()) {
            return response()->json(["success" => false, 'message' => $validate->errors()->first()]);
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

    public function search_contract_action(Request $request)
    {
        try {
            if ($request['filter'] == 'all') {

                $contracts = Contract::orWhere('contract_date', 'like', '%' . $request['keyword'] . '%')
                    ->orWhere('building_management_company', 'like', '%' . $request['keyword'] . '%')
                    ->orWhere('maintenance_company', 'like', '%' . $request['keyword'] . '%')
                    ->orWhere('address', 'like', '%' . $request['keyword'] . '%')
                    ->orWhere('customer_number', 'like', '%' . $request['keyword'] . '%')
                    ->orWhere('created_at', 'like', '%' . $request['keyword'] . '%')
                    ->paginate(10);
                $html = view('engineer_company.templates.contract_listing', compact('contracts'))->render();

                return json_encode([
                    'success' => true,
                    'message' => 'found',
                    'html' => $html,
                ]);


            } else {

                if ($request['filter'] == 'created_at') {

                    try {

                        $date = Carbon::parse($request['keyword'])->format('Y-d-m');
                    } catch (\Exception $ex) {
                        return json_encode([
                            'success' => false,
                            'message' => 'Please enter date in the Year-day-month format'
                        ]);
                    }
                    $contracts = Contract::where($request['filter'], $date)->paginate(10);
                    $html = view('engineer_company.templates.contract_listing', compact('contracts'))->render();

                } else {
                    $contracts = Contract::where($request['filter'], 'like', '%' . $request['keyword'] . '%')->paginate(10);
                    $html = view('engineer_company.templates.contract_listing', compact('contracts'))->render();

                }


                return json_encode([
                    'success' => true,
                    'message' => 'found',
                    'html' => $html,
                ]);


            }
        } catch (\Exception $ex) {
            die($ex->getMessage());
        }
    }

    public static function ClearContract(Request $request)
    {
        $contracts = Contract::paginate(10);
        $html = view('engineer_company.templates.contract_listing', compact('contracts'))->render();


        return json_encode([
            'success' => true,
            'message' => 'found',
            'html' => $html,
        ]);
    }
}
