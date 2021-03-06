<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class checkAdmin
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
        if(Auth::user()->role == 'mover')
        {
          return redirect()->route('mover.dashboard');
        }
        if(Auth::user()->role == 'user')
        {
            return redirect()->route('user.dashboard');
        }
        return $next($request);
    }
}
