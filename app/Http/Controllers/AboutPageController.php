<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\View\View;
use View as ViewShare;

class AboutPageController extends Controller
{
    public function __invoke(): View
    {
        $page = Page::where('slug', 'about')->firstOrFail();
        ViewShare::share('title', 'О компании');

        return view('about', ['page' => $page]);
    }
}
