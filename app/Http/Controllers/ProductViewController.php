<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use View as ViewShare;

class ProductViewController extends Controller
{
    public function __invoke(string $category, string $slug): View
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        ViewShare::share('title', $product->title);

        return view('product', [
            'product' => $product
        ]);
    }
}
