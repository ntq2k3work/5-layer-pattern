<?php

namespace App\Services\Users;

use App\Repositories\User\UserRepository;
use Illuminate\Http\Request;

class UserService
{
    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function create(Request $request)
    {
        return $this->userRepository->create($request->all());
    }
    public function getAllUser()
    {
        return $this->userRepository->getAll();
    }
    public function getUserById($id)
    {
        return $this->userRepository->getUserById($id);
    }
}

?>
