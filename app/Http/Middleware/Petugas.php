<?php

namespace App\Http\Middleware;

use Closure;

class Petugas
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
        if(session('sessionUser')->role->role == "Petugas" || session('sessionUser')->role->role == "Admin") {
          return $next($request);
        } else {
          return redirect()->back();
        }

        //return $next($request);
    }
}
