<?php

namespace App\Http\Middleware;

use Closure;

class IsContrib
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
        if(Auth::user() && (Auth::user()->hasAnyRole('contrib') || Auth::user()->hasAnyRole('admin'))) {
            return $next($request);
        }

        return redirect('/');
    }
}
