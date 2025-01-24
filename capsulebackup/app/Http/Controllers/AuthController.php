<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function handleLogin(Request $request)
    {
        $recaptchaResponse = $request->input('g-recaptcha-response');
        $secretKey = 'YOUR_SECRET_KEY'; // Replace with your actual reCAPTCHA secret key

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $secretKey,
            'response' => $recaptchaResponse,
        ]);

        $responseBody = $response->json();

        if (!$responseBody['success']) {
            return back()->withErrors(['captcha' => 'Please complete the reCAPTCHA verification.']);
        }

        // Continue with login logic, such as validating email and password
        // Example:
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Perform login (example for Laravel's auth system)
        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard'); // Replace 'dashboard' with the route name for the next page
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }
}
