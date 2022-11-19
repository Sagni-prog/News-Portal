<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class Admin
{
    public function handle(Request $request, Closure $next)
    {

        if(Auth::user()->user_type != 1){
            return redirect('/');
        }
        return $next($request);
    }
}
