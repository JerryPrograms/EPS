<?php

namespace App\Http\Controllers\engineercompany;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Engineer_company;
use App\Service\Authentication;

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

    public function ec_signup_action(Request $request){
        $validate = Validator::make($request->all(),[
	        'name' => 'required',
	        'email' => ['required','unique:engineer_companies'],
	        'password' => 'required|min:6',
	        'phone' => 'required|numeric'
	    ]);
	    if($validate->fails())
	    {
	    	return response()->json(["success"=>false,'message'=>$validate->errors()->first()]);
	    }
        $register = Engineer_company::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
            'phone' => $request->phone
        ]);
        if($register){
            return json_encode([
                'success' => true,
                'message' => 'Registered successfully'
            ]);
        }else{
            return json_encode([
                'success' => false,
                'message' => 'Error : Please try again later'
            ]);
        }
    }

    public function ec_login_action(Request $request){
        $validate = Validator::make($request->all(),[
	        'email' => 'required',
	        'password' => 'required'
	    ]);
	    if($validate->fails())
	    {
	    	return response()->json(["Success"=>"False",'Msg'=>$validate->errors()->first()]);
	    }
        $login_attempt = Authentication::login($request->email, $request->password, 'engineer_company');
        if($login_attempt){
            return json_encode([
                'success' => true,
                'message' => 'Login Successfully'
            ]);
        }else{
            return json_encode([
                'success' => false,
                'message' => 'Invalid credentials , please try again'
            ]);
        }
    }
}
