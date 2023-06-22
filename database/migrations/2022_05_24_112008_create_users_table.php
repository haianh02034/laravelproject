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
        Schema::create('users', function (Blueprint $table) {
            $table->string('provider_name')->nullable()->after('provider_name');
            $table->string('provider_id')->nullable()->after('id');

            //$table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->nullable()->change();
            $table->string('avatar')->nullable();
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
    //public function down(): void
    //{
    //    Schema::dropIfExists('users');
    //}
};
