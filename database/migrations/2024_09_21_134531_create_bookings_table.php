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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'book_sub_title')->nullable();
            $table->string('book_head_title')->nullable();
            $table->string('book_title')->nullable();
            $table->string('book_des')->nullable();
            $table->string('image')->nullable();
            $table->string('card_title')->nullable();
            $table->string('cart_des')->nullable();
            $table->string('all_people')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
