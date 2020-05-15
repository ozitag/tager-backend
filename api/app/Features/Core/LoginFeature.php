<?php

namespace App\Features\Core;

use App\Features\Feature;
use App\Http\Requests\Core\AuthRequest;
use App\Http\Resources\user\UserResource;
use App\Jobs\Synch\user\GetUserJwtTokenJob;
use App\Models\Administrator;

class LoginFeature extends Feature
{
    public function handle(AuthRequest $request)
    {
        $user = Administrator::whereEmail($request->login)->first();

        if ($user) {
            if (password_verify($request->password, $user->password)) {
                if (!$user->auth_token) {
                    $this->run(GetUserJwtTokenJob::class, [
                        'user' => $user
                    ]);
                }
                return new UserResource($user);
            } else {
                return response(['message' => 'Invallid credentials'], 401);
            }
        }

        return response(['message' => 'User not found'], 401);
    }
}
