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
            $table->string('id_client');
            $table->string('cname', 100);
            $table->string('adress', 150);
            $table->string('telefon', 15);
            $table->string('email');
            $table->string('account', 25);
            $table->decimal('amount', 10, 2, true)->default(0)->nullable();
            $table->decimal('turnover', 10, 2, true)->default(0)->nullable();
            $table->string('bank', 50);
            $table->string('mfo', 5);
            $table->string('inn', 9);
            $table->string('image', 250)->default();
            $table->string('social', 250);
            $table->string('active',1)->nullable();
            $table->string('Tarif',1)->nullable();
            $table->string('Text',500);
            $table->string('ch1',1)->nullable();
            $table->string('ch2',1)->nullable();
            $table->string('ch3',1)->nullable();
            $table->string('ch4',1)->nullable();
            $table->string('ch5',1)->nullable();
            $table->string('ch6',1)->nullable();
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
