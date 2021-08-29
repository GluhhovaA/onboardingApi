<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index(Request $request)
    {
        if($request->id)
        {
            $user = User::find($request->id);

            return new JsonResponse($user, JsonResponse::HTTP_OK);

        }
        return new JsonResponse(null, JsonResponse::HTTP_NOT_FOUND);
    }

    public function update(Request $request)
    {
        if(!empty($request->all()))
        {
            $user = User::find($request->id);
            if($user)
            {
                $user->update($request->all());
                return new JsonResponse($user, JsonResponse::HTTP_OK);
            }
            return new JsonResponse(null, JsonResponse::HTTP_NOT_FOUND);
        }
        return new JsonResponse(null, JsonResponse::HTTP_NOT_FOUND);
    }
}
