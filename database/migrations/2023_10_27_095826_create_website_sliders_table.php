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
        Schema::create('website_sliders', function (Blueprint $table) {
            $table->id();
            $table->mediumText('heading');
            $table->mediumText('description')->nullable();
            $table->mediumText('link')->nullable();
            $table->string('link_name')->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->nullable()->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_sliders');
    }
};
