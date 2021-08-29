<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interest;
use Illuminate\Http\JsonResponse;

class InterestsController extends Controller
{
    public function index()
    {
        $interests = Interest::all();

        if($interests)
        {
            return new JsonResponse($interests, JsonResponse::HTTP_OK);
        }
        return new JsonResponse(null, JsonResponse::HTTP_NOT_FOUND);
    }

}
