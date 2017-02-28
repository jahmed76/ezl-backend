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
				$table->string('id');
				$table->string('name');
				$table->json('players');
				$table->integer('level');
				$table->string('owner');
				$table->integer('rank');
				//M				aybe more?
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
