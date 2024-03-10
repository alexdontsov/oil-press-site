<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::query()->firstOrCreate(
            [
                'title' => 'Натуральные масла холодного отжима для красоты и здоровья',
                'slug' => 'natural-cold-pressed-oils-for-beauty-and-health',
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
