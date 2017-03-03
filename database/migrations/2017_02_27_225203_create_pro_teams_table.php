<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProTeamsTable extends Migration
{
	
	/**
	* Run the migrations.
	     *
	     * @return void
	     */
	    public function up()
	    {
		//
		
		if(!Schema::hasTable('pro_teams')){
			Schema::create('pro_teams', function(Blueprint $table){
				$table->increments('id');
				$table->string('name');
				$table->string('shardId');
				$table->string('player_one')->nullable();
				$table->string('player_two')->nullable();
				$table->string('player_three')->nullable();
				$table->integer('level')->nullable();
				$table->string('owner')->nullable();
				$table->integer('rank')->nullable();
			}
			);
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
