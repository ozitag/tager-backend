<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;

class RequestIsAjax
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {
        if (!$request->ajax()) {
            return response(['Method is enabled only for AJAX requests'], 400);
        }

        return $next($request);
    }
}
