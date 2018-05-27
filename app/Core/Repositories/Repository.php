<?php

namespace App\Core\Repositories;

interface Repository
{
    public function all(array $columns = ['*']);

    public function first(array $columns = ['*']);

    public function count();
}