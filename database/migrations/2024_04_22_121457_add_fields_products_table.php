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
        Schema::table('products', function (Blueprint $table) {
            $table->longText('key_words')->nullable();
            $table->longText('description')->nullable();
            $table->integer('order')->default(100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
