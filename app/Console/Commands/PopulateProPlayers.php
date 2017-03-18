<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PopulateProPlayers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'john:fillpros';

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
        if (Schema::hasTable('pro_players')) {
            //
            $pros = array("Palmatoro",
                        "nettetoilette",
                        "tetnoJJ",
                        "MICSHE",
                        "CullTheMeek",
                        "LoneDelphi",
                        "FooJee",
                        "Hardek",
                        "chombo305",
                        "Gaspy",
                        "Zio",
                        "Aloh4",
                        "Vains",
                        "xHami",
                        "eVoL",
                        "WizardSibs",
                        "GRASSKUN",
                        "Xenotek",
                        "IraqiZorro",
                        "R3cKeD",
                        "gabevizzle",
                        "Oldskool",
                        "iLoveJoseph",
                        "FlashX",
                        "VONC",
                        "BestChuckNA",
                        "FaZeLover",
                        "BigBaum",
                        "OmegaBorg",
                        "Etteilla",
                        "BloodyWidow",
                        "ApplesandOranges",
                        "ToYoHG",
                        "supertac",
                        "playlover1",
                        "Fabthology",
                        "danman5550",
                        "VictrixMortalis",
                        "xSkorpius",
                        "Arkuru",
                        "Electroys",
                        "Styxx06",
                        "CaveVenom1",
                        "ExeburentWitness",
                        "PureWhiteness",
                        "Innertruth",
                        "ScarletLillian",
                        "SledgeFire",
                        "darkgamerboy",
                        "SatanReaper",
                        "Enmitous",
                        "CitrusEmpire",
                        "Shades",
                        "Pieter76",
                        "teepee",
                        "ZARRYCHERRY",
                        "Z3RUS",
                        "Moridin7",
                        "Enmitous",
                        "KingCosmic",
                        "goldensavers",
                        "Eightbit",
                        "MujyKun",
                        "cobra10",
                        "Helios564",
                        "TypicalToker",
                        "ZzSnipeRZ",
                        "sOmEbboDy",
                        "emuthenerd",
                        "Jerqo",
                        "VeloAxS",
                        "LostBoyToph",
                        "DrakenMythik",
                        "SlickbackJr",
                        "xXCenoXx",
                        "Ar4dek",
                        "Grateshot59",
                        "MidnightLegacy",
                        "TheBrightLord",
                        "Mistican");

                        foreach($pros as $pro){
                            DB::table('pro_players')->insert([
                                'name' => $pro
                            ]);
                        }

// "FaZeLover"
// "BigBaum"
// "OmegaBorg"
// "Etteilla"
// "BloodyWidow"
// "ApplesandOranges"
// "ToYoHG"
// "supertac"
// "playlover1"
// "Fabthology"
// "danman5550"
// "VictrixMortalis"
// "xSkorpius"
// "Arkuru"
// "Electroys"
// "Styxx06"
// "CaveVenom1"
// "ExeburentWitness"
// "PureWhiteness"
// "Innertruth"
// "ScarletLillian"
// "SledgeFire"
// "darkgamerboy"
// "SatanReaper"
// "Enmitous"
// "CitrusEmpire"
// "Shades"
// "Pieter76"
// "teepee"


// "Palmatoro"
// "nettetoilette"
// "tetnoJJ"
// "MICSHE"
// "CullTheMeek"
// "LoneDelphi"
// "FooJee"
// "Hardek"
// "chombo305"
// "Gaspy"
// "Zio"
// "Aloh4"
// "Vains"
// "xHami"
// "eVoL"
// "WizardSibs"
// "GRASSKUN"
// "Xenotek"
// "IraqiZorro"
// "R3cKeD"
// "gabevizzle"
// "Oldskool"
// "iLoveJoseph"
// "FlashX"
// "VONC"
// "BestChuckNA"
// "FaZeLover"    NA
// "BigBaum"    EU
// "OmegaBorg"   NA
// "Etteilla"    EU
// "BloodyWidow"   EU
// "ApplesandOranges"    NA
// "ToYoHG"    EU
// "supertac"    NA
// "playlover1"    NA
// "Fabthology"    SEA
// "danman5550"    NA
// "VictrixMortalis"    NA
// "xSkorpius"    NA
// "Arkuru"    NA
// "Electroys"    NA
// "Styxx06"    NA
// "CaveVenom1"    NA
// "ExeburentWitness"    NA
// "PureWhiteness"    NA
// "Innertruth"    SEA
// "ScarletLillian"    NA
// "SledgeFire"    SEA
// "darkgamerboy"    NA
// "SatanReaper"    EU
// "Enmitous"    NA
// "CitrusEmpire"    EU
// "Shades"    NA
// "Pieter76"    EU
// "teepee"    EU
// "ZARRYCHERRY"
// "Z3RUS"
// "Moridin7"
// "Enmitous"
// "KingCosmic"
// "goldensavers"
// "Eightbit"
// "MujyKun"
// "cobra10"
// "Helios564"
// "TypicalToker"
// "ZzSnipeRZ"
// "sOmEbboDy"
// "emuthenerd"
// "Jerqo"
// "VeloAxS"
// "LostBoyToph"
// "DrakenMythik"
// "SlickbackJr"
// "xXCenoXx"
// "Ar4dek"
// "Grateshot59"
// "MidnightLegacy"
// "TheBrightLord"
// "Mistican"







// eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJqdGkiOiI4YjNkOGQxMC1kYzYyLTAxMzQtNWQ3OC0wMjQyYWMxMTAwMDQiLCJpc3MiOiJnYW1lbG9ja2VyIiwib3JnIjoiYWRtaW4tZXpsZ2ctY29tIiwiYXBwIjoiOGIzYzBmNjAtZGM2Mi0wMTM0LTVkNzctMDI0MmFjMTEwMDA0IiwicHViIjoic2VtYyIsInRpdGxlIjoidmFpbmdsb3J5Iiwic2NvcGUiOiJjb21tdW5pdHkiLCJsaW1pdCI6MTB9.iUpXVRtAbI88JkxERMORUnipOlxweabHeAqYc-QSYQM

        }
    }
}
