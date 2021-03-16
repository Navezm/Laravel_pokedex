<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            [
                'type' => 'Feu',
                'pokemon_id' => '1'
            ],
            [
                'type' => 'Psy',
                'pokemon_id' => '2'
            ],
            [
                'type' => 'Vol',
                'pokemon_id' => NULL
            ],
            [
                'type' => 'Electricité',
                'pokemon_id' => '3'
            ],
            [
                'type' => 'Normal',
                'pokemon_id' => '4'
            ],
            [
                'type' => 'Poison',
                'pokemon_id' => NULL
            ],
            [
                'type' => 'Sol',
                'pokemon_id' => NULL
            ],
            [
                'type' => 'Eau',
                'pokemon_id' => NULL
            ],
            [
                'type' => 'Glace',
                'pokemon_id' => NULL
            ],
            [
                'type' => 'Insecte',
                'pokemon_id' => NULL
            ],
            [
                'type' => 'Spectre',
                'pokemon_id' => NULL
            ],
        ]);
    }
}
