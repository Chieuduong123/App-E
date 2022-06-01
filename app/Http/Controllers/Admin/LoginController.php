<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    function getLogin()
    {
        return view('auth/login');
    }

    function postLogin(Request $request)
    {
        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('login')->withErrors($validator)->withInput();
        } else {
            $email = $request->input('email');
            $password = $request->input('password');

            if (Auth::attempt(['email' => $email, 'password' => $password, 'type' => 1])) {
                return redirect('/admin');
            } else {
                Session::flash('error', 'Email hoặc mật khẩu không đúng!');
                return redirect('/login');
            }
        }
    }
}
