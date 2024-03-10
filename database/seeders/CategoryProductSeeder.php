<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    public function run(): void
    {
        ProductCategory::query()->firstOrCreate(
            [
                'title' => 'Маслопрессы',
                'slug' => 'catalog/oil-presses',
                'image' => 'product_category/category-oil-press.png',
                'description' => '',
                'keywords' => '',
            ]
        );

        ProductCategory::query()->firstOrCreate(
            [
                'title' => 'Маслофильтры',
                'slug' => 'catalog/oil-filters',
                'image' => 'product_category/oil_filter.jpg',
                'description' => '',
                'keywords' => '',
            ]
        );

        ProductCategory::query()->firstOrCreate(
            [
                'title' => 'Маслофильтры',
                'slug' => 'catalog/oil-filters',
                'image' => 'product_category/oil_filter.jpg',
                'description' => '',
                'keywords' => '',
            ]
        );

        ProductCategory::query()->firstOrCreate(
            [
                'title' => 'Жаровня паровая',
                'slug' => 'catalog/zharovniy-parovaya',
                'image' => 'product_category/thumbs_zarovniy.png',
                'description' => '',
                'keywords' => '',
            ]
        );

        ProductCategory::query()->firstOrCreate(
            [
                'title' => 'Запчасти',
                'slug' => 'catalog/zapchasty',
                'image' => 'product_category/thumbs.zip.png',
                'description' => '',
                'keywords' => '',
            ]
        );

        ProductCategory::query()->firstOrCreate(
            [
                'title' => 'Экструдеры',
                'slug' => 'catalog/exstrudery',
                'image' => 'product_category/thumbs.IMG_20230315_180410.jpg',
                'description' => '',
                'keywords' => '',
            ]
        );
    }
}
