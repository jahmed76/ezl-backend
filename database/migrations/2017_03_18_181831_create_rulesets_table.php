<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateRulesetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('fantasy_rulesets') && Schema::hasTable('users')){
            Schema::create('fantasy_rulesets', function (Blueprint $table) {
                $table->increments('id');
                //$table->('fantasy_roster_id');
                $table->string('title')->unique();
                $table->integer('creator');

                $table->foreign('creator')
                        ->references('id')->on('users');

                

                $table->json('rules');

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
        Schema::dropIfExists('fantasy_rulesets');
    }
}
