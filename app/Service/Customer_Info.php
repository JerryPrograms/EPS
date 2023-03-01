<?php

namespace App\Service;

use App\Http\Requests\CustomerInfoRequest;
use App\Models\CustomerInfo;
use App\Models\Engineer;
use App\Models\Engineer_company;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Customer_Info
{
    public static function CreateCustomerInfo(CustomerInfoRequest $request)
    {
        try {
            if (activeGuard() == 'admin') {
                $is_created = CustomerInfo::create([
                    'user_uid' => Str::uuid(),
                    'building_name' => $request['building_name'],
                    'building_management_company' => $request['building_management_company'],
                    'maintenance_company' => $request['maintenance_company'],
                    'address' => $request['address'],
                    'customer_number' => Str::random(10),
                    'added_by' => activeGuard(),
                    'added_by_id' => $request->added_by_id,
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'password' => Hash::make($request['password']),
                ]);
            } else {
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
            }
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
                if (activeGuard() == 'engineer') {
                    $companies = Engineer_company::where('id', auth(activeGuard())->user()->affiliated_company)->first();
                    $customer = CustomerInfo::where(function ($query) use ($request) {
                        $query->orWhere('building_name', 'like', '%' . $request['keyword'] . '%')
                            ->orWhere('building_management_company', 'like', '%' . $request['keyword'] . '%')
                            ->orWhere('maintenance_company', 'like', '%' . $request['keyword'] . '%')
                            ->orWhere('address', 'like', '%' . $request['keyword'] . '%')
                            ->orWhere('customer_number', 'like', '%' . $request['keyword'] . '%')
                            ->orWhere('created_at', 'like', '%' . $request['keyword'] . '%');
                    })->orWhere(function ($query) use ($companies) {
                        $query->where('added_by', 'engineer_company')
                            ->where('added_by_id', $companies->id);
                    })->orWhere(function ($query) {
                        $query->where('added_by', activeGuard())
                            ->where('added_by_id', auth(activeGuard())->id());
                    })->latest()->paginate(10);

                } else if (activeGuard() == 'engineer-company') {
                    $engineers = Engineer::where('affiliated_company', auth(activeGuard())->id())->pluck('id');
                    $customer = CustomerInfo::where(function ($query) use ($request) {
                        $query->orWhere('building_name', 'like', '%' . $request['keyword'] . '%')
                            ->orWhere('building_management_company', 'like', '%' . $request['keyword'] . '%')
                            ->orWhere('maintenance_company', 'like', '%' . $request['keyword'] . '%')
                            ->orWhere('address', 'like', '%' . $request['keyword'] . '%')
                            ->orWhere('customer_number', 'like', '%' . $request['keyword'] . '%')
                            ->orWhere('created_at', 'like', '%' . $request['keyword'] . '%');
                    })->orWhere(function ($query) use ($engineers) {
                        $query->where('added_by', 'engineer')
                            ->whereIn('added_by_id', $engineers);
                    })->orWhere(function ($query) {
                        $query->where('added_by', activeGuard())
                            ->where('added_by_id', auth(activeGuard())->id());
                    })->latest()->paginate(10);
                } else {
                    $customer = CustomerInfo::orWhere('building_name', 'like', '%' . $request['keyword'] . '%')
                        ->orWhere('building_management_company', 'like', '%' . $request['keyword'] . '%')
                        ->orWhere('maintenance_company', 'like', '%' . $request['keyword'] . '%')
                        ->orWhere('address', 'like', '%' . $request['keyword'] . '%')
                        ->orWhere('customer_number', 'like', '%' . $request['keyword'] . '%')
                        ->orWhere('created_at', 'like', '%' . $request['keyword'] . '%')
                        ->paginate(10);
                }

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
                    if (activeGuard() == 'admin') {
                        $customer = CustomerInfo::where($request['filter'], $date)->paginate(10);
                    } else {
                        $customer = CustomerInfo::where($request['filter'], $date)
                            ->where('added_by', activeGuard())
                            ->where('added_by_id', auth(activeGuard())->id())->paginate(10);
                    }

                    $html = view('engineer_company.customer_list_template', compact('customer'))->render();

                } else {
                    if (activeGuard() == 'admin') {
                        $customer = CustomerInfo::where($request['filter'], 'like', '%' . $request['keyword'] . '%')->paginate(10);
                    } else {
                        $customer = CustomerInfo::where($request['filter'], 'like', '%' . $request['keyword'] . '%')->where('added_by', activeGuard())
                            ->where('added_by_id', auth(activeGuard())->id())->paginate(10);

                    }
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
        if (activeGuard() == 'admin') {
            $customer = CustomerInfo::paginate(10);
        } else if (activeGuard() == 'engineer') {
            $companies = Engineer_company::where('id', auth(activeGuard())->user()->affiliated_company)->first();
            $customer = CustomerInfo::orWhere(function ($query) use ($companies) {
                $query->where('added_by', 'engineer_company')
                    ->where('added_by_id', $companies->id);
            })->orWhere(function ($query) {
                $query->where('added_by', activeGuard())
                    ->where('added_by_id', auth(activeGuard())->id());
            })->latest()->paginate(10);
        } else {
            $engineers = Engineer::where('affiliated_company', auth(activeGuard())->id())->pluck('id');
            $customer = CustomerInfo::orWhere(function ($query) use ($engineers) {
                $query->where('added_by', 'engineer')
                    ->whereIn('added_by_id', $engineers);
            })->orWhere(function ($query) {
                $query->where('added_by', activeGuard())
                    ->where('added_by_id', auth(activeGuard())->id());
            })->latest()->paginate(10);
        }
        $html = view('engineer_company.customer_list_template', compact('customer'))->render();

        return json_encode([
            'success' => true,
            'message' => __('translation.found'),
            'html' => $html,
        ]);
    }
}
