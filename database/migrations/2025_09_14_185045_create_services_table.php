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
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->integer('order')->default(1)->nullable();
            $table->boolean('status')->default(0);
            $table->string('title')->nullable();
            $table->mediumText('short_description')->nullable();
            $table->longText('description')->nullable();

            $table->string('image')->nullable();
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();

            $table->string('slug')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_schema')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
