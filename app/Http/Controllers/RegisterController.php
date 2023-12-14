<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max: 255',
            'username' => 'required|max: 255|min:3|unique:users',
            'email' => 'required|unique:users|email:dns',
            'jenis_kelamin' => 'required',
            'password' => 'required|max: 255|min:5'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/')->with('success', 'Register successfully! Please login');
    }
}
