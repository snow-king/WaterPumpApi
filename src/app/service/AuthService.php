<?php

namespace App\service;

use App\helpers\Traits\ApiHelpers;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;


class AuthService
{
    use ApiHelpers;


    /**
     * Авторизация пользователя по роли
     * @param string $login
     * @param string $password
     * @return JsonResponse
     */
    public function login(string $login, string $password): JsonResponse
    {
            Log::info($login." ".$password);
            $user = User::where('email', $login)->where('password', $password)->get()->last();
            if (!$user) {
                return $this->onError(403, 'no access');
            }
            $gateKipper = true;
            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'id' => $user->id,
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ]);
    }
}
