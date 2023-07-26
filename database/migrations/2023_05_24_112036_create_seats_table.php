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
        Schema::create('seats', function (Blueprint $table) {
            $table->increments('id');      
            // $table->integer('auditorium_id')->unsigned();
            $table->unsignedInteger('row');
            $table->unsignedInteger('column');
            $table->boolean('is_booked')->default(false);
            // $table->foreign('auditorium_id')->references('id')->on('auditoriums');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
};
