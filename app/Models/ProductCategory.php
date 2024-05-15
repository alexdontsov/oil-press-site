<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductCategory extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'image', 'description', 'keywords', 'order_by'];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
