<?php

namespace App\Http\Middleware;

use Closure;

class PreventBackMiddleware
{
    /* when we logout our project and click browser back button in left corner then we enter again our project untill we refresh page. This is a big problem. For prevent this problem i create this middleware. This middleware prevent this problem. */

    public function handle($request, Closure $next)
    {
        $response = $next($request);
        return $response->header('Cache-Control','nocache, no-store, max-age=0,     must-revalidate')
            ->header('Pragma','no-cache') //HTTP 1.0
            ->header('Expires','Sat, 01 Jan 1990 00:00:00 GMT'); // // Date in the past
    }
}
