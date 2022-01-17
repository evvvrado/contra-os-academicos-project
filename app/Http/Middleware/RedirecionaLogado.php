<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirecionaLogado
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
       if(env("APP_ENV") != "local"){
            return redirect()->route('site.index');
       };

        return $next($request);
    }
}
