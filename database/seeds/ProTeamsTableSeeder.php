<?php

use Illuminate\Database\Seeder;

class ProTeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\ProTeam::class, 8)->create([
            'shardId' => 'na'
        ]);

        factory(App\ProTeam::class, 8)->create([
            'shardId' => 'eu'
        ]);

        factory(App\ProTeam::class, 8)->create([
            'shardId' => 'sea'
        ]);
    }
}
