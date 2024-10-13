<?php

// database/migrations/xxxx_xx_xx_create_rentals_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    public function up()
        {
            Schema::create('rentals', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
                $table->foreignId('game_id')->constrained('games')->onDelete('cascade');
                $table->date('rental_date');
                $table->date('return_date')->nullable();
                $table->timestamps();
            });
        }


    public function down()
        {
            Schema::table('rentals', function (Blueprint $table) {
                $table->dropForeign(['user_id']);
                $table->dropForeign(['game_id']);
            });

            Schema::dropIfExists('rentals');
        }

}
