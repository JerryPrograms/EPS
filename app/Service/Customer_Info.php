<?php

namespace App\Service;

use App\Http\Requests\CustomerInfoRequest;
use App\Models\CustomerInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
                'added_by' => activeGuard(),
                'added_by_id' => auth(activeGuard())->id(),
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            if ($is_created) {
                return json_encode([
                    'success' => true,
                    'message' => __('Customer Deleted Successfully'),
                ]);
            } else {
                return json_encode([
                    'success' => true,
                    'message' => __('Something went wrong.....'),
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
                    'message' => __('Customer Deleted Successfully'),
                ]);
            } else {
                return json_encode([
                    'success' => true,
                    'message' => __('Something went wrong.....'),


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

                if ($request['filter'] == 'created_at') {

                    try {

                        $date = Carbon::parse($request['keyword'])->format('Y-d-m');
                    } catch (\Exception $ex) {
                        return json_encode([
                            'success' => false,
                            'message' => 'Please enter date in the Year-day-month format'
                        ]);
                    }
                    $customer = CustomerInfo::where($request['filter'], $date)->paginate(10);
                    $html = view('engineer_company.customer_list_template', compact('customer'))->render();

                } else {
                    $customer = CustomerInfo::where($request['filter'], 'like', '%' . $request['keyword'] . '%')->paginate(10);
                    $html = view('engineer_company.customer_list_template', compact('customer'))->render();

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

    public static function ClearCustomerInfo(Request $request)
    {
        $customer = CustomerInfo::paginate(10);
        $html = view('engineer_company.customer_list_template', compact('customer'))->render();

        return json_encode([
            'success' => true,
            'message' => __('translation.found'),
            'html' => $html,
        ]);
    }
}
