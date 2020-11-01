<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next, $guard = null)
    {
        if(Auth::guard($guard)->check()){ 
            return $next($request);
        }else{
            return redirect('login/admin');
        }
    }
}
