<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVgPlayers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('vg_players')){
            //Tournaments - TBA
            Schema::create('vg_players', function (Blueprint $table) {
                $table->increments('id');
                $table->string('player_id');
                $table->string('type');
                $table->string('name');
                $table->string('shard');
                $table->string('title_id');
                $table->integer('wins');
                $table->integer('played');
                $table->integer('played_ranked');
                $table->integer('loss_streak');
                $table->integer('win_streak');
                $table->integer('level');
                $table->integer('life_time_gold');
                $table->integer('xp');
                $table->string('ezl_username')->nullable();
                $table->string('ezl_email')->nullable();

                $table->dateTime('last_updated')->nullable();

                $table->timestamps();
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
