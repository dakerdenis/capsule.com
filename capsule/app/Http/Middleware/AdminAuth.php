<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuth
{
    public function handle($request, Closure $next)
    {
        logger('AdminAuth middleware triggered');
        if (!Auth::guard('web')->check()) {
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}
