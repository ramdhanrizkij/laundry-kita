<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    function login()  {
        return view('auth.login');
    }

    function authenticate(Request $request)  {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $credentials = $request->only('email', 'password');
        $user = User::where('email', $request->email)->first();
        if(!$user){
            return back()->withErrors([
                'email'=>'Email not found'
            ]);
        }

        if(!Auth::attempt($credentials)){
            return back()->withErrors([
                'email'=>'Email or password is wrong'
            ]);
        }
        
        return redirect()->route('dashboard');
    }

    function logout()  {
        Auth::logout();
        return redirect()->route('login')->with('success','Logout successfully');
    }
}
