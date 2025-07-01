<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tripadvisors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('place_id'); // Foreign Key
            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');

            $table->string('name');
            $table->text('comments');
            $table->string('images')->nullable();
            $table->timestamp('comment_date')->useCurrent();
            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('tripadvisors');

        
    }
};
