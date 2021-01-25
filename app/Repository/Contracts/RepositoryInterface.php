<?php
namespace App\Repository\Contracts;


interface RepositoryInterface
{
    public function find(int $id, array $column);

    public function insert(array $data);

    public function delete(int $id);

    public function update(int $id, array $data);

    public function findBy(array $csjdfjs);

}
