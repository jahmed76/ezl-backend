<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        if(!Schema::hasTable('pro_players')){
            Schema::create('pro_players', function(Blueprint $table){
            $table->string('id');
            $table->string('name');
            $table->string('username');
            $table->string('shardId');
            $table->string('team');
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
