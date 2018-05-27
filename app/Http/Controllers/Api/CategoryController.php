<?php

namespace App\Http\Controllers\Api;

use App\Core\Services\CategoryService;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
}