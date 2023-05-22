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
        Schema::create('tariff', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('period_id')->unsigned();       // Ссылка на период
            $table->float('price'); // цена на тариф
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tariff');
    }
};
