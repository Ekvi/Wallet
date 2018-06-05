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

    public function all(array $columns = ['*'])
    {
        return $this->model->get();
    }

    public function first(array $columns = ['*'])
    {
        // TODO: Implement first() method.
    }

    public function count()
    {
        // TODO: Implement count() method.
    }
}