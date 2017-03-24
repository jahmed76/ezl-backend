<?php

use Illuminate\Database\Seeder;
use App\ProTeam;

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
        // factory(App\ProTeam::class, 8)->create([
        //     'shardId' => 'na'
        // ]);

        // factory(App\ProTeam::class, 8)->create([
        //     'shardId' => 'eu'
        // ]);

        // factory(App\ProTeam::class, 8)->create([
        //     'shardId' => 'sea'
        // ]);

        ProTeam::create(array(
            'name' => 'Team SoloMid',
            'shardId' => 'na',
            'jungle_starter' => 'FlashX',
            'carry_starter' => 'BestChuckNa',
            'captain_starter' => 'VONC',
        ));

        ProTeam::create(array(
            'name' => 'Cloud9',
            'shardId' => 'na',
            'jungle_starter' => 'gabevizzle',
            'carry_starter' => 'Oldskool',
            'captain_starter' => 'iLoveJoseph',
        ));

        ProTeam::create(array(
            'name' => 'Immortals',
            'shardId' => 'na',
            'jungle_starter' => 'DNZio',
            'carry_starter' => 'Aloh4',
            'captain_starter' => 'Vains',
            'any_sub' => 'SuiJeneris'
        ));

        ProTeam::create(array(
            'name' => 'Echo Fox',
            'shardId' => 'na',
            'jungle_starter' => 'CullTheMeek',
            'carry_starter' => 'LoneDelphi',
            'captain_starter' => 'MICSHE',
            'any_sub' => 'FooJee'
        ));

        ProTeam::create(array(
            'name' => 'Rogue',
            'shardId' => 'na',
            'jungle_starter' => 'xHami',
            'carry_starter' => 'WizardSibs',
            'captain_starter' => 'GRASSKUN',
            'jungle_sub' => 'eVoL',
            'any_sub' => 'adreN'
        ));

        ProTeam::create(array(
            'name' => 'Hammers Velocity',
            'shardId' => 'na',
            'jungle_starter' => 'ttigers',
            'carry_starter' => 'Chicken123',
            'captain_starter' => 'StartingAllOver',
            'any_sub' => 'MaxGreen'
        ));

        ProTeam::create(array(
            'name' => 'GankStars Sirius',
            'shardId' => 'na',
            'jungle_starter' => 'IraqiZorro',
            'carry_starter' => 'R3cKeD',
            'captain_starter' => 'XenoTek',
            'any_sub' => 'Xelciar'
        ));

        ProTeam::create(array(
            'name' => 'Fates',
            'shardId' => 'na',
            'jungle_starter' => 'Prototypes',
            'carry_starter' => 'Illest',
            'captain_starter' => 'Eeko',
        ));

        ProTeam::create(array(
            'name' => 'TeamRagePingers',
            'shardId' => 'na',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'Nemesis Titan',
            'shardId' => 'na',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'Merakis',
            'shardId' => 'na',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'One Piece 101',
            'shardId' => 'na',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'Noble Pro',
            'shardId' => 'na',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'OMGUnited',
            'shardId' => 'na',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'Ares Animus',
            'shardId' => 'na',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'Artisan',
            'shardId' => 'sg',
            'jungle_starter' => 'Chingy',
            'jungle_sub' => 'HARKONS',
            'carry_starter' => 'Truffles',
            'captain_starter' => 'Delfrye',
        ));

        ProTeam::create(array(
            'name' => 'Elite 8',
            'shardId' => 'sg',
            'jungle_starter' => 'officialhein',
            'jungle_sub' => 'iLoC',
            'carry_starter' => 'HundJaegers',
            'captain_starter' => 'AnimeSaveMe',
        ));

        ProTeam::create(array(
            'name' => 'Exorcists',
            'shardId' => 'sg',
            'jungle_starter' => 'langryyoudie',
            'jungle_sub' => 'k0sh',
            'carry_starter' => 'IIBaby',
            'captain_starter' => '-Kalua-',
            'captain_sub' => 'RubberMonkey',
        ));

        ProTeam::create(array(
            'name' => 'Impunity',
            'shardId' => 'sg',
            'jungle_starter' => '-spaghetti-',
            'carry_starter' => 'deftQ',
            'carry_sub' => 'Quatervois',
            'captain_starter' => 'INKED',
        ));

        ProTeam::create(array(
            'name' => 'Infamous',
            'shardId' => 'sg',
            'jungle_starter' => 'PerfectBladeX',
            'jungle_sub' => 'SnkEA',
            'carry_starter' => 'QuiXotic',
            'captain_starter' => 'uNi',
            'captain_sub' => 'shak2713',
        ));

        ProTeam::create(array(
            'name' => 'J3X Inferno',
            'shardId' => 'sg',
            'jungle_starter' => 'DeityStarZ',
            'jungle_sub' => 'VETRUV',
            'carry_starter' => 'Cyduck',
            'captain_starter' => 'Bxrealis',
            'captain_sub' => 'METEORITE',
        ));

        ProTeam::create(array(
            'name' => 'PH Alliance',
            'shardId' => 'sg',
            'jungle_starter' => 'WehyaM',
            'jungle_sub' => 'tomiya',
            'carry_starter' => 'SynC1',
            'captain_starter' => 'Wharlly',
            'captain_sub' => 'Init1alize',
        ));

        ProTeam::create(array(
            'name' => 'Silver',
            'shardId' => 'sg',
            'jungle_starter' => 'DepressioN',
            'jungle_sub' => 'RaCcooN',
            'carry_starter' => 'laykieng',
            'carry_sub' => 'RasenShuriKen',
            'captain_starter' => 'WwkilozinwW',
        ));

        ProTeam::create(array(
            'name' => 'Cyclone',
            'shardId' => '??',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'G2 ESports',
            'shardId' => '??',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'SK Gaming',
            'shardId' => '??',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'Team Secret',
            'shardId' => '??',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'Fnatic',
            'shardId' => '??',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'Denial Esports',
            'shardId' => '??',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'Rising Lotus',
            'shardId' => '??',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'MouseSports',
            'shardId' => '??',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'NRG',
            'shardId' => '??',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'pQq',
            'shardId' => 'ea',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'ACE',
            'shardId' => 'ea',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'Invincible Armada',
            'shardId' => 'ea',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'QUAD',
            'shardId' => 'ea',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'DetonatioN Gaming',
            'shardId' => 'ea',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'Bcat',
            'shardId' => 'ea',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'GG New Type 2nd',
            'shardId' => 'ea',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

        ProTeam::create(array(
            'name' => 'HACK',
            'shardId' => 'ea',
            'jungle_starter' => 'unkown',
            'carry_starter' => 'unkown',
            'captain_starter' => 'unkown',
        ));

    }
}
