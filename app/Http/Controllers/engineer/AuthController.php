<?php

namespace App\Http\Controllers\engineer;

use App\Http\Controllers\Controller;
use App\Models\Engineer;
use App\Models\Engineer_company;
use App\Service\Authentication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function GetECLogin()
    {
        return view('engineer.auth.login');
    }

    public function GetECSignup()
    {
        $engineer_company = Engineer_company::latest()->get();
        return view('engineer.auth.signup', compact('engineer_company'));
    }

    public function engineer_signup_action(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => ['required', 'unique:users'],
            'password' => 'required|min:6',
            'phone' => 'required|numeric',
            'affiliated_company'=>'required',
        ]);
        if ($validate->fails()) {
            return response()->json(["Success" => "False", 'Msg' => $validate->errors()->first()]);
        }
        $register = Engineer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
            'phone' => $request->phone,
            'affiliated_company'=>$request->affiliated_company,
        ]);
        if ($register) {
            return json_encode([
                'success' => true,
                'message' => 'Registered successfully'
            ]);
        } else {
            return json_encode([
                'success' => false,
                'message' => 'Error : Please try again later'
            ]);
        }
    }

    public function engineer_login_action(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if ($validate->fails()) {
            return response()->json(["Success" => "False", 'Msg' => $validate->errors()->first()]);
        }
        $login_attempt = Authentication::login($request->email, $request->password, 'engineer');
        if ($login_attempt) {
            return json_encode([
                'success' => true,
                'message' => 'Login Successfully'
            ]);
        } else {
            return json_encode([
                'success' => false,
                'message' => 'Invalid credentials , please try again'
            ]);
        }
    }
}
