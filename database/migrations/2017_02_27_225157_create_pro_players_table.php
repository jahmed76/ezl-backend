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
                $table->increments('id');
                $table->string('player_id')->nullable();
                $table->string('name');
                $table->string('username')->nullable();
                $table->string('shardId')->nullable();
                $table->string('team')->nullable();
                $table->integer('level')->nullable();
                $table->double('lifetimeGold')->nullable();
                $table->integer('winStreak')->nullable();
                $table->integer('lossStreak')->nullable();
                $table->integer('played')->nullable();
                $table->integer('wins')->nullable();
                $table->integer('playedRanked')->nullable();
                $table->integer('xp')->nullable();
                $table->timestamp('createdAt')->nullable();
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
