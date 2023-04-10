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
            $table->string('cname', 100);
            $table->string('adress', 150)->default();
            $table->string('telefon', 15)->nullable();
            $table->string('account', 25)->default();
            $table->decimal('amount', 10, 2, true)->default(0)->nullable();
            $table->decimal('turnover', 10, 2, true)->default(0)->nullable();
            $table->string('bank', 50)->default('bank');
            $table->string('mfo', 5)->default(10001);
            $table->string('inn', 9)->default(100000001);
            $table->string('photo_extension')->nullable();
            $table->string('social', 250)->default();
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
