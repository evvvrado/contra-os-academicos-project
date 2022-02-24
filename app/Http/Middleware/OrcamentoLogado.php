<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OrcamentoLogado
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
        if(session()->get("orcamento"))
            return $next($request);

        return redirect()->route("site.acessar-cliente");  
    }
}
