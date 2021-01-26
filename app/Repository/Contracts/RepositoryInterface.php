<?php
namespace App\Repository\Contracts;


interface RepositoryInterface
{
    public function all(array $column = null);

    public function paginate(int $page, int $per_page = 50);

    public function find(int $id, array $column);

    public function findBy(array $criteria, array $column, bool $single = true);

    public function store(array $data);

    public function delete(int $id);

    public function deleteBy(array $criteria, array $data);

    public function update(int $id, array $data);

    public function updateBy(array $criteria, array $data);
}
