<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index()
    {
        return view('login/index', [
            'title' => 'Login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => 'required',
        ]);

        // return $request->all();

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}