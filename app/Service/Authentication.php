<?php

namespace App\Service;

use App\Models\User;
use Carbon\Carbon;

class Authentication
{

    // Login function
    public static function login($email, $password, $guard = 'web')
    {
        try {

            if (empty(activeGuard())) {
                $attempLogin = \Auth::guard($guard)->attempt(['email' => $email, 'password' => $password]);
                return $attempLogin;
            } else {

                return 'x';
            }

        } catch (\Throwable $th) {
            return false;
        }
    }

    // Logout function
    public static function logout($guard = 'web')
    {
        try {
            $logout = \Auth::guard($guard)->logout();
            if ($logout) {
                return true;
            } else {
                return false;
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    // Forgot password reset link
    public static function password_reset_link($email, $reset_password_routename, $mail_view, $mail_body)
    {
        try {
            $token = \Str::random(64);
            $set_password_field = \DB::table('password_resets')->insert([
                'email' => $email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);
            if ($set_password_field) {
                $action_link = route($reset_password_routename, ['token' => $token, 'email' => $email]);
                $body = $mail_body;
                $send_mail = \Mail::send($mail_view, ['action_link' => $action_link, 'body' => $body], function ($message) use ($email) {
                    $message->to($email)->subject('Reset Password');
                });
                if ($send_mail) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    // Reset Password
    public static function password_reset($email, $token, $password)
    {
        try {
            $check_token = \DB::table('password_resets')->where([
                'email' => $email,
                'token' => $token
            ])->first();
            if ($check_token) {
                User::where('email', $email)->update([
                    'password' => \Hash::make($password)
                ]);
                \DB::table('password_resets')->where([
                    'email' => $email
                ])->delete();

                return true;
            } else {
                return false;
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

}
