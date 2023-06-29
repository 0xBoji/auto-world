<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
    
        if (Auth::attempt($credentials)) {
            return redirect('/admin/car-list');
        } else {
            return redirect('/admin/car-list');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/homepage');
    }
}