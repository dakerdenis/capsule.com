<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ServiceAuth
{
    public function handle($request, Closure $next)
    {
        logger('ServiceAuth middleware triggered');
        if (!Auth::guard('service')->check()) {
            return redirect()->route('warranty');
        }

        return $next($request);
    }
}
