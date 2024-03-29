<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Http\Requests\EditClientRequest;
use App\Models\BuildingAddress;
use App\Models\client;
use App\Models\CustomerInfo;
use App\Models\Engineer_company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    public function get_client_listing()
    {

        $customers = CustomerInfo::latest()->get();
        $companies = Engineer_company::latest()->get();
        $combinedData = $customers->concat($companies);


        $perPage = 10;
        $currentPage = request()->get('page', 1);
        $pagedData = new \Illuminate\Pagination\LengthAwarePaginator(
            $combinedData->forPage($currentPage, $perPage),
            $combinedData->count(),
            $perPage,
            $currentPage
        );

        $pagedData->withPath(request()->url());


        return view('admin.client_listing', compact('pagedData'));
    }

    public function add_client()
    {
        $companies = Engineer_company::latest()->get();
        $customer_infos_number = CustomerInfo::pluck('customer_number');
        $customer_infos_numbers = [];

        $e_companies = Engineer_company::pluck('customer_number');
        $e_companies_numbers = [];

        if($customer_infos_number->count() > 0){
            foreach($customer_infos_number as $customer_info_number){
                $c_number = explode('-',$customer_info_number);
                array_push($customer_infos_numbers,$c_number[1]);
            }
            // finding max customer info number
            $collection_c_i_numbers = collect($customer_infos_numbers);
            $greatest_c_i_number = $collection_c_i_numbers->max();
            $greatest_customer_info_number = (int)$greatest_c_i_number;
        }else{
            $greatest_customer_info_number = 0;
        }

        if($e_companies->count() > 0){
            foreach($e_companies as $e_company){
                $e_c_number = explode('-',$e_company);
                array_push($e_companies_numbers,$e_c_number[1]);
            }
            // finding max engineer company numbers
            $collection_e_c_numbers = collect($e_companies_numbers);
            $greatest_e_c_number = $collection_e_c_numbers->max();
            $greatest_engineer_company_number = (int)$greatest_e_c_number;
        }else{
            $greatest_engineer_company_number = 0;
        }
        
        if($greatest_engineer_company_number > $greatest_customer_info_number){
            $client_number = $greatest_engineer_company_number + 1;
        }elseif($greatest_customer_info_number > $greatest_engineer_company_number){
            $client_number = $greatest_customer_info_number + 1;
        }else{
            $client_number = $greatest_customer_info_number + 1;
        }

        $client_number = str_pad($client_number, 5, '0', STR_PAD_LEFT);
        $client_number = 'EPS-' . $client_number;

        return view('admin.add_client', compact('companies','client_number'));
    }

    public function create_client(ClientRequest $request)
    {

        try {

            $data = $request->all();
            unset($data['_token']);
            $data['show_password'] = $data['password'];
            $data['password'] = Hash::make($data['password']);
            if ($request->division == 'building owner') {
                $data['user_uid'] = Str::uuid();
                $data['added_by'] = 'engineer_company';
                $data['added_by_id'] = NULL;

                $check_customer_number = CustomerInfo::where('customer_number', $request->customer_number)->first();
                if($check_customer_number){
                    return json_encode([
                        'success' => false,
                        'message' => __('translation.Customer number is duplicated'),
                    ]);
                }

                $check_master_id = CustomerInfo::where('master_id', $request->master_id)->first();
                if($check_master_id){
                    return json_encode([
                        'success' => false,
                        'message' => __('translation.Master Id is duplicated'),
                    ]);
                }

                $check_company_reg_no = CustomerInfo::where('company_registration_number', $request->company_registration_number)->first();
                if($check_company_reg_no){
                    return json_encode([
                        'success' => false,
                        'message' => __('translation.Company registration number is duplicated'),
                    ]);
                }

                CustomerInfo::create($data);
                return json_encode([
                    'success' => true,
                    'message' => __('translation.Client updated successfully'),
                ]);
            } else {
                $check_customer_number = Engineer_company::where('customer_number', $request->customer_number)->first();
                if($check_customer_number){
                    return json_encode([
                        'success' => false,
                        'message' => __('translation.Customer number is duplicated'),
                    ]);
                }

                $check_master_id = Engineer_company::where('master_id', $request->master_id)->first();
                if($check_master_id){
                    return json_encode([
                        'success' => false,
                        'message' => __('translation.Master Id is duplicated'),
                    ]);
                }

                $check_company_reg_no = Engineer_company::where('company_registration_number', $request->company_registration_number)->first();
                if($check_company_reg_no){
                    return json_encode([
                        'success' => false,
                        'message' => __('translation.Company registration number is duplicated'),
                    ]);
                }

                Engineer_company::create($data);
                return json_encode([
                    'success' => true,
                    'message' => __('translation.Client updated successfully'),
                ]);
            }


        } catch (\Exception $ex) {
            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public function update_client(EditClientRequest $request)
    {
        try {

            $data = $request->all();
            unset($data['_token']);
            $data['show_password'] = $data['password'];
            $data['password'] = Hash::make($data['password']);
            if ($request->division == 'building owner') {
                CustomerInfo::where('id', $request->id)->update($data);
                return json_encode([
                    'success' => true,
                    'message' => __('translation.Client updated successfully'),
                ]);
            } else {
                unset($data['building_id']);
                Engineer_company::where('id', $request->id)->update($data);
                return json_encode([
                    'success' => true,
                    'message' => __('translation.Client updated successfully'),
                ]);
            }


        } catch (\Exception $ex) {
            return json_encode(['success' => false,
                'message' => $ex->getMessage(),]);
        }
    }

    public
    function view_client($type, $id)
    {
        if ($type == 'engineer company') {
            $data = Engineer_company::where('id', $id)->first();
        } else {
            $data = CustomerInfo::where('id', $id)->first();
        }

        if ($data) {
            return view('admin.view_client', compact('data'));
        } else {
            abort(404);
        }
    }

    public
    function edit_client($type, $id)
    {
        if ($type == 'engineer company') {
            $data = Engineer_company::where('id', $id)->first();
        } else {
            $data = CustomerInfo::where('id', $id)->first();
        }

        $building_address = BuildingAddress::where('status', 0)->latest()->get();
        if ($data) {
            return view('admin.edit_client', compact('data', 'building_address'));
        } else {
            abort(404);
        }
    }

    public
    function delete_client(Request $request)
    {
        if ($request->type == 'engineer company') {
            $data = Engineer_company::where('id', $request->id)->delete();
        } else {
            $data = CustomerInfo::where('id', $request->id)->delete();
        }

        return json_encode([
            'success' => true,
            'message' => __('translation.Client Deleted Successfully'),
        ]);
    }
}
