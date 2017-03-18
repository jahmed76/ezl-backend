<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Console\Commands\Log;
use Symfony\Component\Console\Output\ConsoleOutput;

class AssignTeams extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'John:AssignTeams';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Assign teams for mock fantasy';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //

        $pteams = DB::table('pro_teams');
        $pplayers = DB::table('pro_players');

        $teams = $pteams->get();

        foreach($teams as $team){
            $player = DB::table('pro_players')->where('shardId', $team->shardId)->whereNull('team')->first();

            DB::table('pro_teams')->where('name', $team->name)->update(['player_one' => $player->name]);

            DB::table('pro_players')->where('name', $player->name)->update(['team' => $team->name]);

            unset($player);

            $player = DB::table('pro_players')->where('shardId', $team->shardId)->whereNull('team')->first();

            DB::table('pro_teams')->where('name', $team->name)->update(['player_two' => $player->name]);

            DB::table('pro_players')->where('name', $player->name)->update(['team' => $team->name]);

            unset($player);

            $player = DB::table('pro_players')->where('shardId', $team->shardId)->whereNull('team')->first();

            DB::table('pro_teams')->where('name', $team->name)->update(['player_three' => $player->name]);
            DB::table('pro_players')->where('name', $player->name)->update(['team' => $team->name]);

        }
        $console = new ConsoleOutput();
        $console->writeln("Teams Assembled!");
    }
}
