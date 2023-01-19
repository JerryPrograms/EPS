<?php

namespace App\Service;

use App\Http\Requests\CustomerInfoRequest;
use App\Models\CustomerInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Customer_Info
{
    public static function CreateCustomerInfo(CustomerInfoRequest $request)
    {
        try {
            $is_created = CustomerInfo::create([
                'user_uid' => Str::uuid(),
                'building_name' => $request['building_name'],
                'building_management_company' => $request['building_management_company'],
                'maintenance_company' => $request['maintenance_company'],
                'address' => $request['address'],
                'customer_number' => Str::random(10),
            ]);
            if ($is_created) {
                return json_encode([
                    'success' => true,
                    'message' => 'Customer Created Successfully',
                ]);
            } else {
                return json_encode([
                    'success' => true,
                    'message' => 'Something went wrong.....',
                ]);
            }
        } catch (\Exception $ex) {
            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public static function DeleteCustomerInfo(Request $request)
    {
        try {

            $is_deleted = CustomerInfo::where('id', $request['id'])->delete();
            if ($is_deleted) {
                return json_encode([
                    'success' => true,
                    'message' => 'Customer Deleted Successfully',
                ]);
            } else {
                return json_encode([
                    'success' => true,
                    'message' => 'Something went wrong.....',
                ]);
            }

        } catch
        (\Exception $ex) {
            return json_encode([
                'success' => false,
                'message' => $ex->getMessage(),
            ]);
        }
    }

    public static function SearchCustomerInfo(Request $request)
    {
        try {
            if ($request['filter'] == 'all') {

                $customer = CustomerInfo::orWhere('building_name', 'like', '%' . $request['keyword'] . '%')
                    ->orWhere('building_management_company', 'like', '%' . $request['keyword'] . '%')
                    ->orWhere('maintenance_company', 'like', '%' . $request['keyword'] . '%')
                    ->orWhere('address', 'like', '%' . $request['keyword'] . '%')
                    ->orWhere('customer_number', 'like', '%' . $request['keyword'] . '%')
                    ->orWhere('created_at', 'like', '%' . $request['keyword'] . '%')
                    ->paginate(10);
                $html = view('engineer_company.customer_list_template', compact('customer'))->render();

                return json_encode([
                    'success' => true,
                    'message' => 'found',
                    'html' => $html,
                ]);


            } else {
                $customer = CustomerInfo::where($request['filter'], 'like', '%' . $request['keyword'] . '%')->paginate(10);
                $html = view('engineer_company.customer_list_template', compact('customer'))->render();

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
}