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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('test_sub_title')->nullable();
            $table->string('test_head_title')->nullable();
            $table->string('client_img')->nullable();
            $table->string('clint_des')->nullable();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->enum('status', ['pending', 'publish'])->comment('pending & publish');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
