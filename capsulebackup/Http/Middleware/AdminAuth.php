<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminAuth
{
    public function handle($request, Closure $next)
    {
        Log::info('AdminAuth middleware triggered.');

        if (!Auth::check()) {
            Log::warning('AdminAuth middleware: user not authenticated.');
            return redirect()->route('admin.login');
        }

        Log::info('AdminAuth middleware: user authenticated.');
        return $next($request);
    }
}
