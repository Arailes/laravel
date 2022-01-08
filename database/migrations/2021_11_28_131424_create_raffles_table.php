<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRafflesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raffles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug',500);
            $table->string('description')->nullable();
            $table->double('price');
            $table->integer('ticket_amount');
            $table->integer('sweepstakes_amount');
            $table->dateTime('sweepstakes_date');
            $table->foreignId('owner_id');
            $table->string('hash_file',32);
            $table->unique(['owner_id','slug']);
            $table->foreign('owner_id')->references('id')->on('users');
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
        Schema::dropIfExists('raffles');
    }
}
