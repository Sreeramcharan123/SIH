<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User; // ✅ fixed namespace (capital M)
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{
    // Doctor Login
    public function DocLogin(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = [
            'email'     => $request->email,
            'password'  => $request->password,
            'user_type' => 'Doctor',
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('success', 'Welcome Doctor!');
        } else {
            return redirect()->back()->withErrors(['Invalid credentials, please try again.']);
        }
    }

    // Doctor Registration (Sign In)
    public function savedoc(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'spl'      => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed', // ✅ use confirmed for confirm password
        ]);

        $users = new User([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'user_type' => 'Doctor',
            'spl'       => $request->spl,
        ]);

        $users->save();

        return redirect()->route('dashboard')->with('success', 'Doctor registered successfully!');
    }
}
