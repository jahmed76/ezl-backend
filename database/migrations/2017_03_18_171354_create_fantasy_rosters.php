<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFantasyRosters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('fantasy_rosters')){
            Schema::create('fantasy_rosters', function (Blueprint $table) {
                $table->increments('id');
                //$table->('fantasy_roster_id');


                // $table->foreign('owner')
                //         ->references('id')->on('users')->nullable();


                // $table->foreign('fantasy_room')
                //         ->references('room_id')->on('fantasy_rooms');


                $table->text('carry_starter');
                $table->text('carry_sub')->nullable();
                $table->text('jungle_starter');
                $table->text('jungle_sub')->nullable();
                $table->text('captain_starter');
                $table->text('captain_sub')->nullable();
                $table->text('any_sub')->nullable();




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
        Schema::dropIfExists('fantasy_rosters');
    }
}
