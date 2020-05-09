<?php


namespace App\Features\auth;

use App\Features\Feature;
use App\Http\Requests\Api\Guest\auth\AuthRequest;
use App\Http\Resources\user\UserResource;
use App\Jobs\Synch\user\GetUserJwtTokenJob;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class LoginFeature extends Feature
{
    public function handle(AuthRequest $request){
        Log::channel('auth')->info('Request email - ' . $request->email);
        $user = User::whereEmail($request->email)->first();
        if($user) {
            if(password_verify($request->password, $user->password)) {
                if(!$user->auth_token) {
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
