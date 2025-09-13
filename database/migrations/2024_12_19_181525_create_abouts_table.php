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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('place_id'); // Foreign Key
            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');
            $table->string('title')->nullable();
            $table->text('about_Text')->nullable();
            $table->text('vision')->nullable();
            $table->text('mision')->nullable();
            $table->text('kvkk')->nullable();
            $table->text('kalite_polic')->nullable();
            $table->string('poster_1')->nullable();
            $table->string('poster_2')->nullable();
            $table->string('poster_3')->nullable();
            $table->string('poster_4')->nullable();
            $table->string('poster_5')->nullable();
            $table->string('poster_6')->nullable();
            $table->string('poster_7')->nullable();
            $table->string('poster_8')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
