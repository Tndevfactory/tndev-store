<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {

        if ( Auth::check()  &&  Auth::user()->roles()->where('name', '=', $role)->exists()) {
            
            return $next($request);
        }

        abort(403);

        return $next($request);
    }
}
