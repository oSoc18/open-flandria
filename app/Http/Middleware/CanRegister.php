<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CanRegister
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
        $valid = Auth::user()->hasAnyRole('admin') || Auth::guest();
        if($valid) {
            return $next($request);
        }
        return redirect('/');
    }
}
