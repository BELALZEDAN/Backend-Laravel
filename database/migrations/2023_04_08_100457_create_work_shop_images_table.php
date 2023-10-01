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
        Schema::create('work_shop_images', function (Blueprint $table) {
            $table->id();
            $table->string('image');

            $table->unsignedBigInteger('workshop_id');
            $table->foreign('workshop_id')->references('id')->on('work_shops')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_shop_images');
    }
};
