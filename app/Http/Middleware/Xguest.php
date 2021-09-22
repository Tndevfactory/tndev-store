<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class Xguest
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

        if(Auth::check()){

            $role = Auth::user()->roles()->first()->name;

              if ($role == 'admin'){
                  return redirect()
                  ->route('profile-admin',    [ Request()->language, Auth()->user()->id ] );

              }elseif( $role == 'employee') {
                  return redirect()
                  ->route('profile-employee', [ Request()->language, Auth()->user()->id ]);

              }elseif( $role =='client'){
                   return redirect()
                   ->route('profile-client',   [ Request()->language, Auth()->user()->id ]);

              }elseif( $role =='vendeur'){
                   return redirect()
                   ->route('profile-vendeur', [ Request()->language, Auth()->user()->id ]);

              }elseif( $role == null){
                   return redirect()->back()->with('message', 'no auth-id --> found');

              }
        }

        return $next($request);
    }
}
