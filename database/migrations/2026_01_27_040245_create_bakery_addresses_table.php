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
            $table->string('city_id');
            $table->string('province_id');

            $table->foreign('city_id')
            ->references('id')
            ->on('cities')
            ->onDelete('restrict');

            $table->foreign('province_id')
            ->references('id')
            ->on('provinces')
            ->onDelete('restrict');

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
