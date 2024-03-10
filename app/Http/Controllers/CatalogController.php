<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\View\View;

class CatalogController extends Controller
{
    public function __invoke(): View
    {
        return view('catalog', [
            'categories' => ProductCategory::all()->sortBy('order_by')
        ]);
    }
}
