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
            $table->string('user_id',50);
            $table->string('category_id', 15);
            $table->string('brand_id', 15);
            $table->string('name', 100)->index();
            $table->string('soni', 50);
            $table->decimal('price', 10, 2, true)->default(0)->nullable();
            $table->decimal('old_price', 10, 2, true)->default(0)->nullable();
            $table->string('artikul', 50);
            $table->string('image', 250)->default(0);
            $table->string('active',1);
            $table->string('hit');
            $table->timestamps();
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
