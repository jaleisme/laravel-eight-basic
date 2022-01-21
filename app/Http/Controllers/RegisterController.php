<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', ['title' => 'Sign Up', 'active' => 'register']);
    }

    public function store(Request $request){
        $rules = ['name' => 'required', 'username' => 'required|unique:users|min:3|max:20', 'email' => 'required|unique:users', 'password' => 'required|min:8'];
        $validated = $request->validate($rules);
        $validated["password"] = bcrypt($validated["password"]);
        User::create($validated);
        return redirect('/login')->with('success', 'User registered successfully! Proceed to sign in.');
    }
}
