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
    $credentials = $request->only('email', 'password');

    if (Auth::guard('dash')->attempt($credentials) || Auth::guard('teacher')->attempt($credentials)) {
        return redirect()->route('dashboard.index'); // أو المسار المخصص للـ Dashboard
    }

    return back()->withErrors(['email' => 'بيانات الدخول غير صحيحة']);
}

public function logout()
{
    Auth::guard('dash')->logout();
    Auth::guard('teacher')->logout();

    return redirect()->route('login.form');
}
}
