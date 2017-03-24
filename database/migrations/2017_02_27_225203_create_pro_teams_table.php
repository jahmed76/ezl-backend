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
				$table->string('carry_starter')->nullable();
				$table->string('carry_sub')->nullable();
				$table->string('jungle_starter')->nullable();
				$table->string('jungle_sub')->nullable();
				$table->string('captain_starter')->nullable();
				$table->string('captain_sub')->nullable();
				$table->string('any_sub')->nullable();
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
		Schema::dropIfExists('pro_teams');
	}
}
