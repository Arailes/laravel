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
            $table->foreignId('raffles_id');
            $table->foreignId('users_id');
            $table->index(['raffles_id','users_id']);
            $table->foreign('raffles_id')->references('id')->on('raffles');
            $table->foreign('users_id')->references('id')->on('users');
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
