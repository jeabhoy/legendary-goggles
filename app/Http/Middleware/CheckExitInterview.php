<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;

class CheckExitInterview
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
        if (Auth::user()->exitInterviewTaken == 'False' || Auth::user()->level == 'Admin') 
        {
            // $item = Auth::user()->id;
            return $next($request);
        }
        return redirect()->route('userProfileShow', ['id' => $request->route('id')]);
    }
}
