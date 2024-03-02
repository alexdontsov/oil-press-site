<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        Page::query()->firstOrCreate(
            [
                'title' => 'О компании',
                'slug' => 'about',
                'thumbnail' => '',
                'body' => '',
                'keywords' => '',
                'description' => '',
            ]
        );
//
//        Page::query()->firstOrCreate(
//            [
//                'title' => 'Контакты',
//                'slug' => 'about',
//                'thumbnail' => '',
//                'body' => '',
//                'keywords' => '',
//                'description' => '',
//            ]
//        );
    }
}
