<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Engineer_company;

class EngineerCompanyController extends Controller
{
    public function engineer_companies(){
        $engineer_companies = Engineer_company::paginate(10);
        return view('engineer_company.engineer_companies',compact('engineer_companies'));
    }
}
