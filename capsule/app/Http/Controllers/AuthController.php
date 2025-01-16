<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
public function handleLogin(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (\Illuminate\Support\Facades\Auth::guard('service')->attempt($request->only('email', 'password'))) {
        return redirect()->route('warranty.register'); // Or another route for logged-in services
    }

    return back()->withErrors([
        'email' => 'Invalid credentials.',
    ]);
}

}
