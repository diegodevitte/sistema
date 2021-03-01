<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Closure;

class IsAdmin
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
        if (auth()->check() && auth()->user()->is_admin)
            return $next($request);
        }
        return redirect(‘home’)->with(‘error’,"No tienes acceso de administrador.");
    }
}
