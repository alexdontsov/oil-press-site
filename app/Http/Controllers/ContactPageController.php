<?php

declare(strict_types=1);

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use View as ViewShare;
use Illuminate\View\View;

class ContactPageController extends Controller
{
    public function __invoke(Request $request): View
    {
        $title = 'Контакты';
        ViewShare::share('title', $title);
//        dd($request);
//        if ($request->getMimeType())

        return view('contact', []);
    }
}
