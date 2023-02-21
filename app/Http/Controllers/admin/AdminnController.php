<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use App\Service\Authentication;

class AdminnController extends Controller
{
    public function GetAdminLogin()
    {
        return view('admin.auth.login');
    }

    public function admin_login_action(Request $request){
        $validate = Validator::make($request->all(),[
	        'email' => 'required',
	        'password' => 'required'
	    ]);
	    if($validate->fails())
	    {
	    	return response()->json(["Success"=>"False",'Msg'=>$validate->errors()->first()]);
	    }
        $login_attempt = Authentication::login($request->email, $request->password, 'admin');
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
