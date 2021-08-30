<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interest;
use Illuminate\Http\JsonResponse;

class InterestsController extends Controller
{
    public function index(): JsonResponse
    {
        $interests = Interest::all();
        return new JsonResponse($interests, JsonResponse::HTTP_OK);
    }

}
