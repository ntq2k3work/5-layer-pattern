<?php

namespace App\Http\Controllers;

use App\Services\Tasks\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    protected $userService;

    public function __construct(TaskService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $tasks = $this->userService->getAllTasks();
        return response()->json([
            'tasks' => $tasks
        ]);
    }
    public function hello()
    {
        return response()->json([
            'data' => $this->userService->hello(),
        ]);
    }
}
