<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bakery_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bakery_id')->constrained('bakeries')->onDelete('cascade');
            $table->string('address');
            $table->string('rt');
            $table->string('rw');
            $table->string('post_code');
            $table->foreignId('city_id')->constrained('cities')->onDelete('restrict');
            $table->foreignId('province_id')->constrained('provinces')->onDelete('restrict');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bakery_addresses');
    }
};
