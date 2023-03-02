<?php

namespace App\Http\Controllers\engineercompany;

use App\Http\Controllers\Controller;
use App\Models\CustomerInfo;
use App\Models\Engineer;
use App\Models\Engineer_company;
use App\Service\Authentication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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

    public function ec_signup_action(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => ['required', 'unique:engineer_companies'],
            'password' => 'required|min:6',
            'phone' => 'required|numeric'
        ]);
        if ($validate->fails()) {
            return response()->json(["success" => false, 'message' => $validate->errors()->first()]);
        }
        $register = Engineer_company::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
            'phone' => $request->phone
        ]);
        if ($register) {
            return json_encode([
                'success' => true,
                'message' => __('translation.Registered successfully')
            ]);
        } else {
            return json_encode([
                'success' => false,
                'message' => __('translation.Error : Please try again later')
            ]);
        }
    }

    public function ec_login_action(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if ($validate->fails()) {
            return response()->json(["success" => false, 'message' => $validate->errors()->first()]);
        }
        $login_attempt = Authentication::login($request->email, $request->password, 'engineer_company');
        if ($login_attempt === 'x') {
            return json_encode([
                'success' => false,
                'message' => 'you are already logged in as ' . activeGuard(),
            ]);
        }
        if ($login_attempt) {
            return json_encode([
                'success' => true,
                'message' => __('translation.Login Successfully')
            ]);
        } else {
            return json_encode([
                'success' => false,
                'message' => __('translation.Invalid credentials , please try again')
            ]);
        }
    }

    public function GetResetPassword($guard)
    {
        return view('engineer_company.auth.reset_email', compact('guard'));
    }

    public function SendResetPassword(Request $request)
    {
        $token = Str::random('20');
        if ($request->guard == 'engineer_company') {
            $engineer_company = Engineer_company::where('email', $request->email)->first();
            if ($engineer_company) {

                Engineer_company::where('id', $engineer_company->id)->update([
                    'remember_token' => $token . 'a',
                ]);

                $this->sendEmail(route('UpdatePassword', $token.'a'), $request->email);
                return redirect()->route('CheckEmail')->with('url', route('ec.GetECLogin'));

            } else {
                return redirect()->back()->with('message', 'Email not found');
            }
        } else if ($request->guard == 'engineer') {
            $engineer = Engineer::where('email', $request->email)->first();
            if ($engineer) {

                Engineer::where('id', $engineer->id)->update([
                    'remember_token' => $token . 'b',
                ]);
                $this->sendEmail(route('UpdatePassword', $token.'b'), $request->email);
                return redirect()->route('CheckEmail')->with('url', route('e.GetECLogin'));;

            } else {
                return redirect()->back()->with('message', 'Email not found');
            }
        } else {
            $customer = CustomerInfo::where('email', $request->email)->first();
            if ($customer) {

                CustomerInfo::where('id', $customer->id)->update([
                    'remember_token' => $token . 'c',
                ]);
                $this->sendEmail(route('UpdatePassword', $token.'c'), $request->email);
                return redirect()->route('CheckEmail')->with('url', route('customer-login'));

            } else {
                return redirect()->back()->with('message', 'Email not found');
            }
        }
    }

    public function UpdatePassword($token)
    {
        $last = $token[strlen($token) - 1];
        if ($last == 'a') {
            $check = Engineer_company::where('remember_token', $token)->first();
            $model = 'engineer_companies';
            $id = $check->id;
            if ($check) {
                return view('engineer_company.auth.reset_password', compact('token', 'model', 'id'));
            } else {
                abort(404);
            }
        } else if ($last == 'b') {
            $check = Engineer::where('remember_token', $token)->first();
            $model = 'engineers';
            $id = $check->id;
            if ($check) {
                return view('engineer_company.auth.reset_password', compact('token', 'model', 'id'));
            } else {
                abort(404);
            }
        } else {
            $check = CustomerInfo::where('remember_token', $token)->first();
            $model = 'customer_infos';
            $id = $check->id;
            if ($check) {
                return view('engineer_company.auth.reset_password', compact('token', 'model', 'id'));
            } else {
                abort(404);
            }
        }

    }

    public function CheckEmail()
    {
        return view('engineer_company.auth.check_email');
    }

    public function sendEmail($url, $email)
    {

        $details = [

            'title' => 'Click on the link below to reset password',

            'url' => $url,

        ];


        \Mail::to($email)->send(new \App\Mail\MyTestMail($details));


    }

    public function UpdateResetPassword(Request $request)
    {

        if ($request->password == $request->password_confirmation) {
            $update = DB::table($request->model)->update([
                'password' => Hash::make($request->password),
            ]);
            if ($request->model == 'customer_infos') {
                return redirect()->route('customer-login');
            } else if ($request->model == 'engineers') {
                return redirect()->route('e.GetECLogin');
            } else {
                return redirect()->route('ec.GetECLogin');
            }
        } else {
            return redirect()->back()->with('password_error', 'Passwords do not match');
        }
    }
}
