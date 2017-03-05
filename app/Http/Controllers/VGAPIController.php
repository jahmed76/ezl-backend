<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VGAPIController extends Controller
{
    //

    //private $API_KEY = config('database.vgapikey');

    private $API_URL = "https://api.dc01.gamelockerapp.com/shards/";

    public function AddPlayer($region = "eu", $pName = "kappie"){
        
        $key = config('database.vgapikey');
        $url = $this->API_URL . $region . "/players/?filter[playerName]=" . $pName;
        //$url = $this->API_URL . $region . "/players?filter[playerNames]=" . $pName;
        
        $cURL = curl_init($url);
        curl_setopt($cURL, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($cURL, CURLOPT_HTTPHEADER, array("Authorization: " . $key, "X-TITLE-ID: semc-vainglory", "Accept: application/vnd.api+json"));
        curl_setopt($cURL, CURLOPT_URL, $url);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($cURL);
        //$http_result = $output['']
        return json_encode($output);

    }

    public function GetLatestMatches($region = "eu"){
        $key = config('database.vgapikey');
        $url = $this->API_URL . $region . "/matches";
        
        $cURL = curl_init($url);
        curl_setopt($cURL, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($cURL, CURLOPT_HTTPHEADER, array("Authorization: " . $key, "X-TITLE-ID: semc-vainglory", "Accept: application/vnd.api+json"));
        curl_setopt($cURL, CURLOPT_URL, $url);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($cURL);
        $json = json_decode($output);
        
        $rosters = array();
        $players = array();
        $participants = array();

        //Disperse included amongst above arrays
        
        // foreach($json->included as $inc){

        // }


        
        //Add comparison against arrays for more thorough data model
        foreach($json->data as $data){
            $bAdd = DB::table('vg_matches')->where('match_id', $data->id)->first();
            //echo json_encode($bAdd);
            if(!$bAdd){
                DB::table('vg_matches')->insert(
                    ['match_id' => $data->id,
                    'match_created_at' => $data->attributes->createdAt,
                    'duration' => $data->attributes->duration,
                    'shard' => $data->attributes->shardId,
                    'game_mode' => $data->attributes->gameMode,
                    'patch' => $data->attributes->patchVersion,
                    'end_game_reason' => $data->attributes->stats->endGameReason,
                    'queue' => $data->attributes->stats->queue,
                    'title_id' => $data->attributes->titleId,
                    'roster_blue' => $data->relationships->rosters->data[0]->id,
                    'roster_red' => $data->relationships->rosters->data[1]->id
                    ]);
            }
        }

        //return $json->included[0]->type;

    }

    public function GetSpecialMatch($player = 'kappie'){
        $key = config('database.vgapikey');
        $url = $this->API_URL . "eu/matches?filter[playerNames]=" . $player;
        
        $cURL = curl_init($url);
        curl_setopt($cURL, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($cURL, CURLOPT_HTTPHEADER, array("Authorization: " . $key, "X-TITLE-ID: semc-vainglory", "Accept: application/vnd.api+json"));
        curl_setopt($cURL, CURLOPT_URL, $url);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($cURL);
        echo $output;
    }




}
