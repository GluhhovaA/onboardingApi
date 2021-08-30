<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(): JsonResponse
    {
        $tasks = Task::all();
        return new JsonResponse($tasks, JsonResponse::HTTP_OK);
    }
}
