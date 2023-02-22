<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('customer.auth.login');
    }

    public function customer_login_action(Request $request){
        dd($request->all());
    }
}
