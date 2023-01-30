<?php

namespace App\Http\Controllers\engineer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function GetECLogin()
    {
        return view('engineer.auth.login');
    }

    public function GetECSignup()
    {
        return view('engineer.auth.signup');
    }

    public function engineer_signup_action(Request $request){
        return json_encode([
            'success' => true,
            'message' => 'Login successfull'
        ]);
    }
}
