<?php

use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;

class ProPlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\ProPlayer::class, 24)->create([
            'shardId' => 'na'
        ]);

        factory(App\ProPlayer::class, 24)->create([
            'shardId' => 'eu'
        ]);

        factory(App\ProPlayer::class, 24)->create([
            'shardId' => 'sea'
        ]);
    }
}