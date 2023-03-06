<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Service\Authentication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
}
