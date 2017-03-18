<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearTeams extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'John:ClearTeams';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Unassigns all teams for mock fantasy';

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
        //Write clear teams function
    }
}
