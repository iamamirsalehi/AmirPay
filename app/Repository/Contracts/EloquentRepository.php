<?php
namespace App\Repository\Contracts;

use App\Repository\Contracts\RepositoryInterface;


class EloquentRepositoryInterface implements RepositoryInterface
{
    protected $model;

    public function find(int $id, array $column)
    {

    }

    public function insert(array $data)
    {

    }

    public function delete(int $id)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function findBy(array $csjdfjs)
    {

    }
}
