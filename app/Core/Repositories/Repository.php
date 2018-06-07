<?php

namespace App\Core\Repositories;

interface Repository
{
    public function all(array $where = [], array $columns = ['*']);

    public function first(array $where = [], array $columns = ['*']);

    public function count(array $where = []);
}