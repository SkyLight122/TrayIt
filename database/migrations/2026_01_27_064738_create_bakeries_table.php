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
        Schema::create('bakeries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->text('description');
            $table->text('address');
            $table->foreignId('bakery_type_id')->constrained('bakery_types')->onDelete('restrict');
            $table->dateTime('pickup_date');
            $table->string('logo_path')->nullable();
            $table->integer('order_per_day');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bakeries');
    }
};
