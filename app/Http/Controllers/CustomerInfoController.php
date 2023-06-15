<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerInfoRequest;
use App\Models\CustomerInfo;
use App\Models\KeyAccessoryInformation;
use App\Service\Customer_Info;
use Illuminate\Http\Request;

class CustomerInfoController extends Controller
{
    public function CreateCustomerInfo(CustomerInfoRequest $request)
    {
        return Customer_Info::CreateCustomerInfo($request->all());
    }

    public function DeleteCustomerInfo(Request $request)
    {
        return Customer_Info::DeleteCustomerInfo($request->all());
    }

    public function SearchCustomerInfo(Request $request)
    {
        return Customer_Info::SearchCustomerInfo($request->all());
    }

    public function GetCustomerDashboard()
    {
        $customer = CustomerInfo::where('user_uid', auth(activeGuard())->user()->user_uid)->first();
        if ($customer) {
            return view('customer.dashboard', compact('customer'));
        }
        abort(404);
    }

    public function delete_sub_part_form(Request $request)
    {


        $delete = KeyAccessoryInformation::where('id',$request->id)->delete();
        if($delete)
        {
            return json_encode([
                'success'=>true,
                'message'=>__('translation.Part deleted successfully'),
            ]);
        }
    }
}
