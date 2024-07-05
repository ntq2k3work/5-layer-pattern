<?php

namespace App\Services\Tasks;

use App\Repositories\Tasks\TaskRepository ;

class TaskService
{
    protected $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function getAllTasks()
    {
        return $this->taskRepository->getAll();
    }
    public function hello()
    {
        return $this->taskRepository->hello();
    }
}

?>
