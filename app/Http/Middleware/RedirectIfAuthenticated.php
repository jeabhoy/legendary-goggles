<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'web')
    {
        if (Auth::guard($guard)->check()) {
            if (Auth::user()->level == 'Admin') {
                return redirect()->route('adminDashboardIndex');
            }
            return redirect()->route('userProfileShow', ['id' => Auth::id()]);
        }
        return $next($request);
    }
}
