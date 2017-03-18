<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Console\Commands\Log;
use Symfony\Component\Console\Output\ConsoleOutput;

class init_rulesets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'John:init_rulesets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $console = new ConsoleOutput();

        $console->writeln("I executed!");

        $def = new \stdClass();
            $def->carry = new \stdClass();
            $def->jungle = new \stdClass();
            $def->captain = new \stdClass();
            $def->carry->kill = 2;
            $def->carry->death = -2;
            $def->carry->assist = 1;
            $def->carry->csmulti = 2;
            $def->carry->victory = 10;
            $def->carry->ten_kill = 5;
            $def->carry->twenty_kill = 12;
            $def->jungle->kill = 2;
            $def->jungle->death = -2;
            $def->jungle->assist = 1;
            $def->jungle->csmulti = 3;
            $def->jungle->victory = 10;
            $def->jungle->ten_kill = 7;
            $def->jungle->twenty_kill = 15;
            $def->captain->kill = 1;
            $def->captain->death = -1;
            $def->captain->assist = 2;
            $def->captain->csmulti = 1;
            $def->captain->victory = 10;
            $def->captain->ten_kill = 5;
            $def->captain->twenty_kill = 12;

            $console->writeln($def->captain->twenty_kill);

            $json = json_encode($def);

            // if(!is_null($json)){
                DB::table('fantasy_rulesets')->insert(
                                [
                                    'title' => 'Default',
                                    'creator' => 'John',
                                    'rules' => $json
                                ]) or die($console->writeln(error_get_last()));
            // }
    }
}
