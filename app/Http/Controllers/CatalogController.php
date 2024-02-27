<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class CatalogController extends Controller
{
    public function __invoke(): View
    {
//        $post = Product::where('slug', $slug)->firstOrFail();
        return view('catalog', [
//            'post' => $post
        ]);
    }
}
