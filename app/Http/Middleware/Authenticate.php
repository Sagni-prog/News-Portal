<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
   
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
        return $next($request)->header('Cache-Control','no-cache,no-store,max-age=0,must-revalidate')
        ->header('pragma','no-cache')
        ->header('Expires','sat 01 jan 1990 00:00:00 GMT');  
    }
}
