<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class ContactPageController extends Controller
{
    public function __invoke(): View
    {
        return view('contact', []);
    }
}
