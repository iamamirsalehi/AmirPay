<?php
namespace App\Repository\Eloquent\User;

use App\Models\User;
use App\Repository\Contracts\EloquentBaseRepository;
use App\Repository\Contracts\UserRepositotyInterface;

class EloquentUserRepository extends EloquentBaseRepository implements UserRepositotyInterface
{
    protected $model = User::class;

    public function getActiveUser()
    {

    }
}
