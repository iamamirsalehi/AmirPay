<?php
namespace App\Repository\User;

use App\Models\User;
use App\Repository\User\UserRepositotyInterface;
use App\Repository\Contracts\EloquentRepositoryInterface;

class EloquentUserRepository extends EloquentRepositoryInterface implements UserRepositotyInterface
{
    protected $model = User::class;

    public function getActiveUser()
    {

    }
}
