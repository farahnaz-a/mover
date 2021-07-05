<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class checkMover
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role == 'admin')
        {
            
            return redirect()->route('dashboard');
        }
        if(Auth::user()->role == 'user')
        {
            return redirect()->route('user.dashboard');
        }
        return $next($request);
    }
}
