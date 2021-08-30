<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function signin(Request $request): JsonResponse
    {
        $user = User::where('user_identifier', $request->user_identifier)->first();
        if($user)
        {
            return new JsonResponse($user, JsonResponse::HTTP_OK);
        }

        return new JsonResponse(null, JsonResponse::HTTP_NOT_FOUND);
    }
}
