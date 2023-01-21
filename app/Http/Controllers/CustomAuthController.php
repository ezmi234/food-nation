<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class CustomAuthController extends Controller
{
    public function home(){
        return view('home.index');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('home')
                ->with('message', 'Signed in!');
        }

        return redirect("/login")->with('message', 'Login details are not valid!');
    }

    public function signUp(){
        return view('register.index');
    }
}
