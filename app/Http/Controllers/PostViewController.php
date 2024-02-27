<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class PostViewController extends Controller
{
    public function __invoke(string $slug): View
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('post', [
            'post' => $post
        ]);
    }
}
