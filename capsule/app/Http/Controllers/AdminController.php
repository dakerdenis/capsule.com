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

        try {
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

            return redirect()->route('admin.login')->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        } catch (\Exception $e) {
            Log::error('Unexpected error during login: ' . $e->getMessage(), [
                'line' => $e->getLine(),
                'file' => $e->getFile(),
            ]);

            return redirect()->route('admin.login')->withErrors([
                'email' => 'An unexpected error occurred. Please try again.',
            ]);
        }
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
        $section = $request->query('section', 'home');
        $validSections = ['home', 'products', 'services', 'warranties'];
    
        if (!in_array($section, $validSections)) {
            abort(404, 'Section not found');
        }
    
        $products = [];
        $services = [];
    
        if ($section === 'products') {
            $query = \App\Models\Product::query();
    
            // Filter by type if provided
            if ($request->has('type') && $request->query('type') !== '') {
                $type = $request->query('type');
                $query->where('type', $type);
            }
    
            // Sort by date if provided
            if ($request->has('sort_by_date') && $request->query('sort_by_date') !== '') {
                $sortByDate = $request->query('sort_by_date');
                $query->orderBy('verification_date', $sortByDate);
            }
    
            // Filter by warranty if provided
            if ($request->has('has_warranty') && $request->query('has_warranty') !== '') {
                $hasWarranty = $request->query('has_warranty');
                if ($hasWarranty == '1') {
                    $query->whereNotNull('warranty');
                } else {
                    $query->whereNull('warranty');
                }
            }
    
            $products = $query->paginate(20);
        }
    
        if ($section === 'services') {
            $services = \App\Models\Service::all(); // Get all services
        }
    
        return view('admin.dashboard', compact('section', 'products', 'services'));
    }
    
    
    
    
    
}
