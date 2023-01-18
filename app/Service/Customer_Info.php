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
}
