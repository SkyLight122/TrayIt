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
        Schema::create('bakery_cake_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bakery_id')->constrained('bakeries')->onDelete('cascade');
            $table->foreignId('cake_type_id')->constrained('cake_types')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bakery_cake_types');
    }
};
