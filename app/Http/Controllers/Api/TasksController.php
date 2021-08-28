<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        if($tasks)
        {
            return new JsonResponse($tasks, JsonResponse::HTTP_OK);
        }
        return new JsonResponse(null, JsonResponse::HTTP_NOT_FOUND);
    }
}
