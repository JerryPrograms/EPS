<?php

namespace App\Service;

use App\Models\CustomerInfo;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class Customer_Info
{
    public static function CreateCustomerInfo($data)
    {
        try {
            $is_created = CustomerInfo::create([
                'user_uid' => Str::uuid(),
                'building_name' => $data['building_name'],
                'building_management_company' => $data['building_management_company'],
                'maintenance_company' => $data['maintenance_company'],
                'address' => $data['address'],
                'customer_number' => Str::random(5),
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

    public static function DeleteCustomerInfo($data)
    {
        try {

            $is_deleted = CustomerInfo::where('id', $data['id'])->delete();
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

    public static function SearchCustomerInfo($data)
    {
        try {
            if ($data['filter'] == 'all') {

                $customer = CustomerInfo::orWhere('building_name', 'like', '%' . $data['keyword'] . '%')
                    ->orWhere('building_management_company', 'like', '%' . $data['keyword'] . '%')
                    ->orWhere('maintenance_company', 'like', '%' . $data['keyword'] . '%')
                    ->orWhere('address', 'like', '%' . $data['keyword'] . '%')
                    ->orWhere('customer_number', 'like', '%' . $data['keyword'] . '%')
                    ->orWhere('created_at', 'like', '%' . $data['keyword'] . '%')
                    ->paginate(10);
                $html = view('engineer_company.customer_list_template', compact('customer'))->render();

                return json_encode([
                    'success' => true,
                    'message' => 'found',
                    'html' => $html,
                ]);


            } else {
                $customer = CustomerInfo::where($data['filter'], 'like', '%' . $data['keyword'] . '%')->paginate(10);
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
