<?php

namespace App\Core\Repositories;

use Jenssegers\Mongodb\Eloquent\Model;

abstract class MongoRepository implements Repository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all(array $where = [], array $columns = ['*'])
    {
        if($where) {
            return $this->model->where($where)->get();
        }

        return $this->model->get();
    }

    public function first(array $where = [], array $columns = ['*'])
    {
        // TODO: Implement first() method.
    }

    public function count(array $where = [])
    {
        // TODO: Implement count() method.
    }
}