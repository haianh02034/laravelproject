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
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('user_id')->unsigned();
           
            $table->integer('movie_id')->unsigned();
       
            $table->integer('auditorium_id')->unsigned();
      
            $table->integer('theater_id')->unsigned();
     
            $table->integer('showtime_id')->unsigned();
            $table->dateTime('booking_date');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->foreign('auditorium_id')->references('id')->on('auditoriums');
            $table->foreign('theater_id')->references('id')->on('theaters');
            $table->foreign('showtime_id')->references('id')->on('showtimes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
