<?php
namespace App\Repository\Contracts;

use App\Repository\Contracts\RepositoryInterface;


class EloquentBaseRepository implements RepositoryInterface
{
    protected $model;

    public function find(int $id, array $column)
    {

    }

    public function findBy(array $criteria, array $column, bool $single = true)
    {

    }

    public function store(array $data)
    {

    }

    public function delete(int $id)
    {

    }

    public function deleteBy(array $criteria, array $data)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function updateBy(array $criteria, array $data)
    {

    }

    public function all(array $column = null)
    {
        if(!is_null($column))
            return $this->model::all($column);

        return $this->model::all();
    }

    public function paginate(int $page, int $per_page = 50)
    {

    }
}
