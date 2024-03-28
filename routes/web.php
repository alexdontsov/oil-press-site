<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\MainPageController::class)->name('Main page');
Route::get('/news', \App\Http\Controllers\PostListController::class)->name('List post');
Route::get('/news/{slug}', \App\Http\Controllers\PostViewController::class)->name('View post');
Route::get('/catalog', \App\Http\Controllers\CatalogController::class)->name('Catalog');
Route::get('/portfolio', \App\Http\Controllers\ProjectListController::class)->name('Portfolio');
Route::get('/catalog/{category}/{slug}', \App\Http\Controllers\ProductViewController::class)->name('View post');
Route::get('/catalog/{category}', \App\Http\Controllers\CatalogCategoryController::class)->name('Catalog category');
Route::get('/about', \App\Http\Controllers\AboutPageController::class)->name('About page');
Route::get('/contact', \App\Http\Controllers\ContactPageController::class)->name('Contact page');
