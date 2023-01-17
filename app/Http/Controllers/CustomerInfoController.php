<?php

namespace App\Http\Controllers;

use App\Service\CreateCustomerInfo;
use Illuminate\Http\Request;

class CustomerInfoController extends Controller
{
    public function CreateCustomerInfo(Request $request)
    {
        return CreateCustomerInfo::CreateCustomerInfo($request->all());
    }
}
