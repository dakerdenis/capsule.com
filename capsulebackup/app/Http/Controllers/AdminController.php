<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {
        Log::info('Login method triggered.');

        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        Log::info('Validation passed.');

        // Attempt to log in the user
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            Log::info('Authentication successful for user: ' . $request->email);
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        Log::warning('Authentication failed for user: ' . $request->email);

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Log::info('Logout method triggered.');
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
    public function showAdminPage(Request $request)
    {
        // Get the 'section' query parameter, default to 'home'
        $section = $request->query('section', 'home');
    
        // Validate the section to ensure it's a valid component
        $validSections = ['home', 'products', 'services', 'warranties'];
    
        if (!in_array($section, $validSections)) {
            abort(404, 'Section not found');
        }
    
        // Pass the section to the view
        return view('admin.dashboard', compact('section'));
    }
    
}
