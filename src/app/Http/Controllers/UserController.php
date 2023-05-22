<?php

namespace App\Http\Controllers;


use App\service\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        try {
            $credentials = $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
            return (new AuthService)->login($credentials["email"], $credentials["password"]);
        } catch (Throwable $th) {
            return $this->onError(500, $th);
        }
    }
}
