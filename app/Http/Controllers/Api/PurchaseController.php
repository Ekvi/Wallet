<?php

namespace App\Http\Controllers\Api;

use App\Core\Services\PurchaseService;
use App\Http\Controllers\Controller;

class PurchaseController extends Controller
{
    private $purchaseService;

    public function __construct(PurchaseService $purchaseService)
    {
        $this->purchaseService = $purchaseService;
    }
}