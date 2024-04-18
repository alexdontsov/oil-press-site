<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use View as ViewShare;
use Illuminate\View\View;

class ContactPageController extends Controller
{
    public function __invoke(): View
    {
        $title = 'Контакты';
        ViewShare::share('title', $title);

        return view('contact', []);
    }
}
