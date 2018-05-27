<?php

namespace App\Core\Repositories;

use App\Core\Models\Category;

class CategoryRepository extends MongoRepository
{
    public function __construct(Category $model)
    {
        $this->model = $model;
    }
}