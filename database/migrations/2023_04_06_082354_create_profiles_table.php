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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('cname', 100)->nullable();
            $table->string('adress', 150)->default()->nullable();
            $table->string('telefon', 15)->nullable();
            $table->string('account', 25)->default()->nullable();
            $table->decimal('amount', 10, 2, true)->default(0)->nullable();
            $table->decimal('turnover', 10, 2, true)->default(0)->nullable();
            $table->string('bank', 50)->default('bank')->nullable();
            $table->string('mfo', 5)->default(10001)->nullable();
            $table->string('inn', 9)->default(100000001)->nullable();
            $table->string('social', 250)->default()->nullable();
            $table->string('active',1)->nullable();
            $table->string('Tarif',1)->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
