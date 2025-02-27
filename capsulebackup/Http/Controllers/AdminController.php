<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Product;
use App\Models\Service;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::guard('web')->attempt($request->only('email', 'password'))) {
            return redirect()->route('admin.dashboard');
        }
    
        return back()->withErrors([
            'email' => 'Invalid credentials.',
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

    public function showAdminPage()
    {
        $section = 'home';
        return view('admin.dashboard', compact('section'));
    }

    public function adminProducts(Request $request)
    {
        $query = Product::query();

        if ($request->has('type') && $request->query('type') !== '') {
            $type = $request->query('type');
            $query->where('type', $type);
        }

        if ($request->has('sort_by_date') && $request->query('sort_by_date') !== '') {
            $sortByDate = $request->query('sort_by_date');
            $query->orderBy('verification_date', $sortByDate);
        }

        if ($request->has('has_warranty') && $request->query('has_warranty') !== '') {
            $hasWarranty = $request->query('has_warranty');
            if ($hasWarranty == '1') {
                $query->whereNotNull('warranty');
            } else {
                $query->whereNull('warranty');
            }
        }

        $products = $query->paginate(20);
        $section = 'products';

        return view('admin.dashboard', compact('section', 'products'));
    }

    public function adminServices()
    {
        $services = Service::all();
        $section = 'services';

        return view('admin.dashboard', compact('section', 'services'));
    }

    public function adminSingleService($id)
    {
        $service = Service::findOrFail($id); // Fetch the service by ID or fail with a 404
        $section = 'single_service';
    
        return view('admin.dashboard', compact('section', 'service'));
    }
    
    

    public function adminWarranties()
    {
        $warranties = []; // Load warranty data as needed
        $section = 'warranties';

        return view('admin.dashboard', compact('section', 'warranties'));
    }

    public function adminSingleWarranty($id)
    {
        $warranty = []; // Load single warranty data as needed
        $section = 'single_warranty';

        return view('admin.dashboard', compact('section', 'warranty'));
    }
}
