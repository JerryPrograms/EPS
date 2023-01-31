<?php

namespace App\Http\Controllers\engineer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Engineer;
use App\Service\Authentication;

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
        $validate = Validator::make($request->all(),[
	        'name' => 'required',
	        'email' => ['required','unique:users'],
	        'password' => 'required|min:6',
	        'phone' => 'required|numeric'
	    ]);
	    if($validate->fails())
	    {
	    	return response()->json(["Success"=>"False",'Msg'=>$validate->errors()->first()]);
	    }
        $register = Engineer::create([
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

    public function engineer_login_action(Request $request){
        $validate = Validator::make($request->all(),[
	        'email' => 'required',
	        'password' => 'required'
	    ]);
	    if($validate->fails())
	    {
	    	return response()->json(["Success"=>"False",'Msg'=>$validate->errors()->first()]);
	    }
        $login_attempt = Authentication::login($request->email, $request->password, 'engineer');
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
