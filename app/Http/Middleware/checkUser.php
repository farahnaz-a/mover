<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class checkUser
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
        if(Auth::user()->role == 'mover')
        {
            return redirect()->route('mover.dashboard');
        }
        return $next($request);
    }
}
