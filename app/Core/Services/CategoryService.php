<?php

namespace App\Core\Services;

use App\Core\Repositories\CategoryRepository;

class CategoryService
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getAll()
    {
        return $this->categoryRepository->all();
    }

    public function get(string $type)
    {
        return $this->categoryRepository->all(['type' => $type]);
    }
}