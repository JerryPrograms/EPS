<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerInfoRequest;
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
}
