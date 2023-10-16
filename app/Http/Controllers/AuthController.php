<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register() {
        return view('auth.register');
    }

    public function store() {
        //firstly, validate
        //secondly, create user
        //finally, redirect

        $validated = request()->validate(
            [

                'name' => 'required|min:3|max:40',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed|min:8'

            ]
            );

        $user = User::create(
            [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),

            ]
            );

        return redirect()->route('dashboard')->with('success', 'Account has created Successfully.!');

    }

    public function login() {
        return view('auth.login');
    }

    public function authenticate() {
        //firstly, validate
        //secondly, create user
        //finally, redirect

        $validated = request()->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:8'

            ]
            );

        if (auth()->attempt($validated)) {
            request()->session()->regenerate();
            return redirect()->route('dashboard')->with('success', 'Logged in Successfully.!');

        }



        return redirect()->route('login')->withErrors(
            [
                'email' => " No matching user with the provided email and password"

            ]
            );

    }

    public function logout() {
        auth()->logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('dashboard')->with('success', 'Logged out Successfully.!');
    }
}
