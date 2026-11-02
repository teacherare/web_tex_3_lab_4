<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*  Run the migrations.      */
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('ism');
            $table->string('fam')->nullable();
            $table->string('aloqa')->nullable();
            $table->string('email')->nullable();

            $table->string('ij_tarmoq_turi');
            $table->string('ij_tarmoq_manzili');

            $table->string('tel')->nullable();

            $table->text('xabar');

            $table->string('rasm')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
