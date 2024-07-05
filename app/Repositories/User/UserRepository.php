<?php

namespace App\Repositories\User;

use App\Models\User; // Replace with your model
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }


}


?>
