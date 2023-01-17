<?php

namespace App\Http\Controllers\engineercompany;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function GetECLogin()
    {
        return view('engineer_company.auth.login');
    }

    public function GetECSignup()
    {
        return view('engineer_company.auth.signup');
    }
}
