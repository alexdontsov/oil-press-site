<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Page;

class PageSeeder
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

        Page::query()->firstOrCreate(
            [
                'title' => 'Контакты',
                'slug' => 'about',
                'thumbnail' => '',
                'body' => '',
                'keywords' => '',
                'description' => '',
            ]
        );
    }
}
