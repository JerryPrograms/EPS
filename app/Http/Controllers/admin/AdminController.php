<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Service\Authentication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;

class AdminController extends Controller
{
    public function GetAdminLogin()
    {
        return view('admin.auth.login');
    }

    public function admin_login_action(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if ($validate->fails()) {
            return response()->json(["success" => false, 'message' => $validate->errors()->first()]);
        }

        $login_attempt = Authentication::login($request->email, $request->password, 'admin');

        if ($login_attempt === "x") {
            return json_encode([
                'success' => false,
                'message' => __('translation.you are already logged in as ') . activeGuard(),
            ]);
        }
        if ($login_attempt) {
            return json_encode([
                'success' => true,
                'message' => __("translation.Login Successfully"),
            ]);
        } else {
            return json_encode([
                'success' => false,
                'message' => __('translation.Invalid credentials , please try again'),
            ]);
        }
    }

    public function change_password(){
        return view('admin.change_password');
    }

    public function change_password_action(Request $request){
        $validate = Validator::make($request->all(), [
            'current_password' => 'required',
            'password' => 'required|confirmed'
        ]);
        if ($validate->fails()) {
            return response()->json(["success" => false, 'message' => $validate->errors()->first()]);
        }
        try {
            $getadmin = Admin::where('id', auth('admin')->id())->first();
            $checkPassword = \Hash::check($request->current_password, $getadmin->password);
            if(!$checkPassword){
                return json_encode([
                    'success' => false,
                    'message' => __('translation.Your current password is incorrect')
                ]);
            }
            $hashedPassword = \Hash::make($request->password);
            $getadmin->update([
                'password' => $hashedPassword
            ]);
            return json_encode([
                'success' => true,
                'message' => __('translation.Password changed successfully')
            ]);
        } catch (\Throwable $th) {
            return json_encode([
                'success' => false,
                'message' => __('translation.Error : Please try again later'),
            ]);
        }
    }
}
