<?php

namespace App\Http\Middleware\Api;

use Closure;
use App\Models\AuthClient;
use Illuminate\Http\Request;

class BasicAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $authorization = $request->header('Authorization');
        if ($authorization) {
            if (mb_substr($authorization, 0, 6) !== 'Basic ') {
                return response(["message" => "Only Basic authorization supported"], 401);
            }
            return $next($request);
        } else {
            return response(["message" => "Missing client token"], 401);
        }
    }
}
