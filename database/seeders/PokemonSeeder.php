<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemon')->insert([
            [
                'name' => 'Salameche',
                'src' => 'Salamèche.png',
                'lvl' => '25'
            ],
            [
                'name' => 'Alakazam',
                'src' => 'Alakazam.png',
                'lvl' => '75'
            ],
            [
                'name' => 'Magneti',
                'src' => 'Magnéti.png',
                'lvl' => '30'
            ],
            [
                'name' => 'Ronflex',
                'src' => 'Ronflex.png',
                'lvl' => '68'
            ]
        ]);
    }
}
