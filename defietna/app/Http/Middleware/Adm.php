<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Adm
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (in_array('adm', Session::get('user')->groups)) {
            return $next($request);
        }

        if (Session::get('user')->login == 'elmarg_h'||Session::get('user')->login == 'anicet_e'){
            return $next($request);
        }

        return redirect('/');

        
    }
}
