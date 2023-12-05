<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // return $request->all();
        $validatedData = $request->validate([
            'username' => 'required|min:4|max:255|unique:users',
            'fullname' => 'required|max:255',
            'asal_kota' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255',
            'deskripsi' => 'required|max:255',
            'photo_profile' => 'required|max:255',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        return redirect('/login')->with('success', 'Create account success, Please login!');
    }
}
