<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('players')->insert({
            'name'=>'侯立委'
            'tid'=>0
            'character_position'=>Rifle
            'mouse'="zowei ec-1"
            'dpi'=>800
            'sens'=>1
            'scope_sens'=>1
            'monitor'=>'XL2566'
            'graphics_card'=>'RTX2060'
            'resolution'=>'1280*960'
            'scaling_ratio'=>'4:3'
            'display_mode'=>'scratch'
            'mouse_pad'=>'steelseries heavy'
            'keyboard'=>'ducky zero 2'
            'earphone'=>'cloud 2'


        })
    }
}
