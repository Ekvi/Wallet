<?php

namespace App\Core\Repositories;

use App\Core\Models\Purchase;

class PurchaseRepository extends MongoRepository
{
    public function __construct(Purchase $model)
    {
        $this->model = $model;
    }
}