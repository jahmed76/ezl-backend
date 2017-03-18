<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRostersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('vg_rosters')){
            Schema::create('vg_rosters', function (Blueprint $table) {
                $table->increments('id');
                $table->string('roster_id');
                $table->string('designation');
                $table->json('stats');
                $table->text('player_one');
                $table->text('player_two');
                $table->text('player_three');




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
