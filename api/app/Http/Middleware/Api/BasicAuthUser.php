<?php

namespace App\Http\Middleware\Api;

use App\Models\Administrator;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasicAuthUser
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $authorization = $request->header('Authorization');
        $credentials = explode(':', base64_decode(mb_substr($authorization, 6)));
        if (count($credentials) !== 2) {
            return response(["message" => "Invalid authorization credentials"], 401);
        }
        $email = array_shift($credentials);
        $password = array_shift($credentials);
        $user = Administrator::whereEmail($email)->first();
        if ($user) {
            if (password_verify($password, $user->password)) {
                Auth::login($user);
            } else {
                return response(['message' => 'Invallid credentials'], 401);
            }
        }
        return $next($request);
    }
}
