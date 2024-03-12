<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class PostListController extends Controller
{
    public function __invoke(): View
    {
        $posts = Post::query()->orderBy('published_at', 'desc')->paginate(10);
        return view('post-list', [
            'posts' => $posts
        ]);
    }
}
