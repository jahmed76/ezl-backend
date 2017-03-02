<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVgMatches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('vg_matches')){
            //Tournaments - TBA
            Schema::create('vg_matches', function (Blueprint $table) {
                $table->increments('id');
                $table->string('match_id');
                $table->string('title_id');
                $table->string('shard');
                $table->string('patch')->nullable();
                $table->integer('duration');
                $table->string('match_created_at');
                $table->string('game_mode');
                $table->string('end_game_reason');
                $table->string('queue');
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
