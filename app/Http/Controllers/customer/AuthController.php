<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Service\Authentication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('customer.auth.login');
    }

    public function customer_login_action(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if ($validate->fails()) {
            return response()->json(["Success" => "False", 'Msg' => $validate->errors()->first()]);
        }
        $login_attempt = Authentication::login($request->email, $request->password);
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
