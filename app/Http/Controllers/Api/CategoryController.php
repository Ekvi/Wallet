<?php

namespace App\Http\Controllers\Api;

use App\Core\Services\CategoryService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function get(Request $request)
    {
        $categories = $this->categoryService->get($request->get('type'));

        return response()->json($categories);
    }
}