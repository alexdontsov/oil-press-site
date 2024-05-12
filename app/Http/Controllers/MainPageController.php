<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Slider;
use Illuminate\View\View;

class MainPageController extends Controller
{
    public function __invoke(): View
    {
        $posts = Post::query()->orderBy('published_at', 'desc')->paginate(3);
        $products = Product::query()->orderBy('id', 'desc')->paginate(4);
        $categories = ProductCategory::query()->orderBy('order_by', 'asc')->paginate(3);
        $sliders = Slider::query()->orderBy('order', 'desc')->get();

        return view('main', [
            'sliders' => $sliders,
            'posts' => $posts,
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
