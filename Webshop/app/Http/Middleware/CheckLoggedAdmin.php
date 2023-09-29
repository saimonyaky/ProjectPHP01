<?php

namespace App\Http\Middleware;

use Closure;

class CheckLoggedAdmin
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
        if(session()->has('logged')){
            return back();
        }
        return $next($request);
    }
}
