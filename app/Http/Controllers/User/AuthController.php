<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('user.auth.login');
    }

    public function postLogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect(url('/user'))->with('success','You are Login As User!');
        }
    }

    public function showRegister()
    {
        return view('user.auth.register');
    }

    public function postRegister(Request $request)
    {
        return $request;
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url('/login'));
    }


}
