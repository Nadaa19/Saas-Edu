<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('dashboard.pages.auth.login-form');
    }

    public function login(Request $request)
    {
        if (Auth::guard('dash')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {

            return view('dashboard.pages.index');
        } elseif (Auth::guard('teacher')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return view('dashboard.pages.index');

        }

        return view('dashboard.pages.auth.login-form');

    }

    public function logout()
    {
        Auth::guard('dash')->logout();

        return view('dashboard.pages.auth.login-form');

    }
}
