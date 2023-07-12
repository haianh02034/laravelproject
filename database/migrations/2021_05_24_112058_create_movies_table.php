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
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('category');
            $table->string('director')->nullable();
            $table->string('performer')->nullable();
            $table->string('producer')->nullable();
            $table->string('release_year')->nullable();
            $table->string('National_production')->nullable();
            $table->string('time')->nullable();
            $table->string('movie_photo')->nullable();
            $table->string('language')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
