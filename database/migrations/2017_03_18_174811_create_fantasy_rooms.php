<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFantasyRooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('fantasy_rooms') && Schema::hasTable('users')){
            Schema::create('fantasy_rooms', function (Blueprint $table) {
                $table->increments('room_id');
                //$table->('fantasy_roster_id');


                $table->foreign('owner')
                        ->references('id')->on('users')->nullable();

                $table->string('room_name')->unique();

                // $table->foreign('fantasy_room')
                //         ->references('room_id')->on('fantasy_rooms');

                $table->json('ruleset');

                $table->json('members')->nullable();
                
                //$table->json('points')->nullable();




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
