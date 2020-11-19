<?php

namespace App\Http\Middleware;

use Closure;

class CekRole
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
        $roles = $this->CekRoute($request->route());
        
        if ($request->user()->hasRole($roles) == "Manager Gudang") {
            return $next($request);
        } else {
            if ($request->user()->hasRole($roles) == "Agen") {
                return $next($request);
            } else {
                return $next($request);
            }
        }
        return abort(503, 'Anda tidak memiliki hak akses');
    }
    private function CekRoute($route)
    {
        $actions = $route->getAction();
        return isset($actions['roles']) ? $actions['roles'] : null;
    }
}
