<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('players', function(Blueprint $table){
            $table->string('id');
            $table->string('name');
            $table->string('shardId');
            $table->integer('level');
            $table->double('lifetimeGold');
            $table->integer('winStreak');
            $table->integer('lossStreak');
            $table->integer('played');
            $table->integer('wins');
            $table->integer('playedRanked');
            $table->integer('xp');
            $table->timestamp('createdAt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
