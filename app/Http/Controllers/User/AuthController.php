<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('user.auth.login');
    }

    public function postLogin(Request $request)
    {
        //check email exist
        if (User::where('email',$request->email)->first()) {
            //attempt login
            if(Auth::attempt($request->only('email','password'))){
                return redirect(url('/'));
            }else{
                return redirect(url('/login'))->with('danger','Password Incorrect!');
            }
        } else {
            //redirect
            return redirect(url('/login'))->with('danger','Email Not Found!');
        }


    }

    public function showRegister()
    {
        return view('user.auth.register');
    }

    public function postRegister(Request $request)
    {
        if($request->new_pw === $request->con_pw){
            $file = $request->file('image');
            $file_name = uniqid(time()).$file->getClientOriginalName();
            $file_path = 'image/'.$file_name;
            $file->storeAs('image',$file_name);

            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->con_pw),
                'image'=>$file_path
            ]);
            return redirect(url('/login'))->with('success','Register Success. Please Login!');
                User::where('id',Auth::user()->id)->update([
                    'password'=>Hash::make($request->con_pw)
                ]);
        }else{
            return redirect(url('/register'))->with('danger','Password and confirm password are not same!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url('/login'));
    }

    public function privacy()
    {
     return view('user.auth.privacy');
    }

    public function update(Request $request)
    {

        $current_password = $request->cur_pw;
        if(Auth::attempt(['email'=>Auth::user()->email,'password'=>$request->cur_pw])){
            $new_password = $request->new_pw;
            $confirm_password = $request->con_pw;
            if($request->new_pw === $request->con_pw){
                User::where('id',Auth::user()->id)->update([
                    'password'=>Hash::make($request->con_pw)
                ]);
                return redirect()->back()->with('success','Success Changed Password!');
            }else{
                return redirect()->back()->with('danger','Password and confirm password are not same!');
            }

        }else{
            return redirect()->back()->with('danger','Incorrect Password!');
        }
    }


}
