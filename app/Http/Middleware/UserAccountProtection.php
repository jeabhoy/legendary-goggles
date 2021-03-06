<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserAccountProtection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if (Auth::user()->level == 'Admin') {
        return $next($request);
      }
      if (Auth::user()->id != $request->route('id')){
        $item = Auth::user()->id;
        return redirect()->route('userProfileShow', ['id' => $item]);
      }
      return $next($request);
    }
}
