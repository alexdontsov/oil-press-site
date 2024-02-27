<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 1024);
            $table->string('slug', 1024);
            $table->json('images');
            $table->string('body', 4048);
            $table->boolean('active')->default(false);
            $table->boolean('is_new')->default(false);
            $table->boolean('sale')->default(false);
            $table->unsignedBigInteger('category_id')->index();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('product_categories')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
