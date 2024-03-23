<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\View\View;

class CatalogCategoryController extends Controller
{
    public function __invoke(string $category): View
    {
        $productCategory = ProductCategory::where('slug', $category)->firstOrFail();

        return view('catalog_category', [
            'category' => $productCategory,
            'products' => $productCategory->products,
        ]);
    }
}
