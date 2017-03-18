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
        if(!Schema::hasTable('users')){
        Schema::create('players', function(Blueprint $table){
            
            $table->string('player_id');
            $table->string('name');
            $table->string('username');
            $table->string('team');
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
