<?php

use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;
use App\ProPlayer;
// use Illuminate\Support\Facades\Schema;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Database\Migrations\Migration;
use Symfony\Component\Console\Output\ConsoleOutput;

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
        // factory(App\ProPlayer::class, 24)->create([
        //     'shardId' => 'na'
        // ]);

        // factory(App\ProPlayer::class, 24)->create([
        //     'shardId' => 'eu'
        // ]);

        // factory(App\ProPlayer::class, 24)->create([
        //     'shardId' => 'sea'
        // ]);

        //if (Schema::hasTable('pro_teams')) {

            
            $pros = array();

            $console = new ConsoleOutput();

            $pro_teams = DB::table('pro_teams')->get();

            foreach($pro_teams as $team){

                $console->writeln($team->carry_starter);

                $arr = array();

                if($team->jungle_starter != null){
                    $arr = array(
                        'name' => $team->jungle_starter,
                        'shardId' => $team->shardId,
                        'team' => $team->name,
                        'position' => 'Jungle Starter',
                    );
                    
                    $pros[]=$arr;

                    unset($arr);
                }

                $arr = array();

                if($team->jungle_sub != null){
                    $arr = array(
                        'name' => $team->jungle_sub,
                        'shardId' => $team->shardId,
                        'team' => $team->name,
                        'position' => 'Jungle Sub',
                    );
                    
                    $pros[]=$arr;

                    unset($arr);
                }

                $arr = array();

                if($team->carry_starter != null){
                    $arr = array(
                        'name' => $team->carry_starter,
                        'shardId' => $team->shardId,
                        'team' => $team->name,
                        'position' => 'Carry Starter',
                    );
                    
                    $pros[]=$arr;

                    unset($arr);
                }

                $arr = array();

                if($team->carry_sub != null){
                    $arr = array(
                        'name' => $team->carry_sub,
                        'shardId' => $team->shardId,
                        'team' => $team->name,
                        'position' => 'Carry Sub',
                    );
                    
                    $pros[]=$arr;

                    unset($arr);
                }

                $arr = array();

                if($team->captain_starter != null){
                    $arr = array(
                        'name' => $team->captain_starter,
                        'shardId' => $team->shardId,
                        'team' => $team->name,
                        'position' => 'Captain Starter',
                    );
                    
                    $pros[]=$arr;

                    unset($arr);
                }

                $arr = array();

                if($team->captain_sub != null){
                    $arr = array(
                        'name' => $team->captain_sub,
                        'shardId' => $team->shardId,
                        'team' => $team->name,
                        'position' => 'Captain Sub',
                    );
                    
                    $pros[]=$arr;

                    unset($arr);
                }

                $arr = array();

                if($team->any_sub != null){
                    $arr = array(
                        'name' => $team->any_sub,
                        'shardId' => $team->shardId,
                        'team' => $team->name,
                        'position' => 'Any Sub',
                    );
                    
                    $pros[]=$arr;

                    unset($arr);
                }
                
                $arr = array();


                    //$pros[]=$team->jungle_starter;

                // if($team->jungle_sub != null)
                //     $pros[]=$team->jungle_sub;

                // if($team->carry_sub != null)
                //     $pros[]=$team->carry_sub;

                // if($team->carry_starter != null)
                //     $pros[]=$team->carry_starter;

                // if($team->captain_sub != null)
                //     $pros[]=$team->captain_sub;

                // if($team->captain_starter != null)
                //     $pros[]=$team->captain_starter;

                // if($team->any_sub != null)
                //     $pros[]=$team->any_sub;
            }

            

            foreach($pros as $pro){
                ProPlayer::create(array(
                    'name' => $pro['name'],
                    'shardId' => $pro['shardId'],
                    'team' => $pro['team'],
                    'position' => $pro['position'],
                ));

                //$console->writeln($pro);
            }
        //}

    }
}