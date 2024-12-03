<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
    $credentials = $request->validate([
    'email' => 'required|email',
    'password' => 'required|min:8',
    'remember' => 'nullable'
]);
    }
}
