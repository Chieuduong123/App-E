<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function getLogin()
    {
        dd(111);
        return view('auth/login');
    }

    public function postLogin()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password'), 'type' => 1])) {
            return redirect('admin');   
        } else {
            Session::flash('error', 'Email or password error!');
            return redirect('login');
        }
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('login');
    }
}
