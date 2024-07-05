<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\BaseRepositoryInterface;
use App\Repositories\User\UserRepository;
use App\Services\Users\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function index()
    {
        $users = $this->userService->getAllUser();
        return response()->json([
            'data' => $users
        ]);
    }

}
