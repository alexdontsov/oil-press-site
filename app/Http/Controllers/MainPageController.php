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
//        $posts_1 = Post::query()->orderBy('published_at', 'desc')->paginate(3);
        $posts_1 = Post::whereHas('categories', function ($q) {
            $q->where('slug', 'istoriia-otpravlennogo-oborudovaniia');
        })->orderBy('published_at', 'desc')->paginate(3);

        $posts_2 = Post::whereHas('categories', function ($q) {
            $q->where('slug', 'poseshhenie-zavoda-v-kitae');
        })->orderBy('published_at', 'desc')->paginate(3);

        $products = Product::query()->where('show_in_main', '=', true)->orderBy('order')->paginate(4);
        $categories = ProductCategory::query()->orderBy('order_by', 'asc')->paginate(4);
        $sliders = Slider::query()->orderBy('order', 'desc')->get();

        return view('main', [
            'sliders' => $sliders,
            'posts_1' => $posts_1,
            'posts_2' => $posts_2,
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
