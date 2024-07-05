<?php

namespace App\Repositories\Tasks;

use App\Models\Task;
use App\Models\User; // Replace with your model
use App\Repositories\BaseRepository;

class TaskRepository extends BaseRepository
{
    public function __construct(Task $model)
    {
        parent::__construct($model);
    }
    public function hello()
    {
        return 'Hello from TaskRepository';
    }

}


?>
