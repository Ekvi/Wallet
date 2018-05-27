<?php

namespace App\Core\Services;

use App\Core\Repositories\PurchaseRepository;

class PurchaseService
{
    private $purchaseRepository;

    public function __construct(PurchaseRepository $purchaseRepository)
    {
        $this->purchaseRepository = $purchaseRepository;
    }
}