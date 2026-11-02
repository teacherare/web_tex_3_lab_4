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
        Schema::create('website_evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact_info')->nullable();
            $table->string('photo')->nullable();
            $table->tinyInteger('user_level');
            $table->json('evaluation_sections')->nullable();
            $table->text('feedback');
            $table->tinyInteger('content_rating');
            $table->tinyInteger('design_rating');
            $table->tinyInteger('functionality_rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_evaluations');
    }
};
