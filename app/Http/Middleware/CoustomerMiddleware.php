<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CoustomerMiddleware
{
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::guard($guard)->check()){ 
            return $next($request);
        }else{
            return redirect()->Route('home');
        }
    }
}
