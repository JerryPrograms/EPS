<?php

namespace App\Http\Controllers\engineercompany;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function contract_management_list(Request $request){
        return view('engineer_company.contract_management_list');
    }

    public function add_contract(){
        return view('engineer_company.add_contract');
    }

    public function contract_view(){
        return view('engineer_company.contract_view');
    }
}
