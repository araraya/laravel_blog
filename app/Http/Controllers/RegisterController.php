<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register/index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedUserData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedUserData['password'] = bcrypt($validatedUserData['password']);
        $validatedUserData['password'] = Hash::make($validatedUserData['password']);

        User::Create($validatedUserData);

        // laravel 8 pake ini
        // $request->session()->flash('success', 'Registration Success! Please Login');
        // laravel 9
        // session()->flash('success', 'Registration Success! Please Login');

        return redirect('/login')->with('success', 'Registration Success! Please Login');
    }
}