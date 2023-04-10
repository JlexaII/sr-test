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
        Schema::create('bozors', function (Blueprint $table) {
            $table->id();
            $table->string('nameT', 50)->default('Name product');
            $table->decimal('sum', 10, 2, true)->default(0)->nullable();
            $table->string('news', 500)->default('text news');
            $table->string('foto')->default('default.jpg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bozors');
    }
};
