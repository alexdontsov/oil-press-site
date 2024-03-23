<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class ProductViewController extends Controller
{
    public function __invoke(string $category, string $slug): View
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('product', [
            'product' => $product
        ]);
    }
}
