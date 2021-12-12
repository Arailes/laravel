<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRafflesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raffles_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('raffle_id');
            $table->foreignId('user_id');
            $table->index(['raffle_id','user_id']);
            $table->foreign('raffle_id')->references('id')->on('raffles');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('raffles_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('raffles_users');
    }
}
