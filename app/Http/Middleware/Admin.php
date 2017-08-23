<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if(Auth::user() -> type === 'admin') {
            return $next($request);
        }else if(Auth::user() -> type === 'member'){
            //dd('Saludos usuario');

            return redirect()->route('front.index');
        }

    }
}
