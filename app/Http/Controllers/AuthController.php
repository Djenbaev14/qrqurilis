<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){

        if (auth()->attempt($request->only(['login', 'password']))) {
            return redirect()->route('dashboard.index');
        }
        return redirect()->back()->with('error','Логин или пароль неверный');
    }

    public function logout(Request $request){
        auth()->logout();

        return redirect()->route('auth.login');
    }
}
