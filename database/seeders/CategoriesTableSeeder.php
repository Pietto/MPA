<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'catID' => 1,
                'name' => 'locomotive',
                'description' => 'Locomotieven zijn de ruggengraat van het Nederlandse Spoor. Overal inzetbaar en trekken alles!'
            ],[
                'catID' => 2,
                'name' => 'diesel locomotive',
                'description' => 'Locomotieven met Diesel aandrijving, deze machine\'s kunnen ook zonder waslijn rijden!'
            ],[
                'catID' => 3,
                'name' => 'electric locomotive',
                'description' => 'Locomotieven met Elektrissche aandrijving. Goedkoper en zuiniger dan diesel, en met hogere prestaties!'
            ],[
                'catID' => 4,
                'name' => 'electric multiple unit',
                'description' => 'Elektrische reizigerstreinen die uit meerdere delen bestaan.'
            ],[
                'catID' => 5,
                'name' => 'diesel multiple unit',
                'description' => 'Reizigerstreinen op diesel, Deze kunnen ook zonder waslijn rijden.'
            ],[
                'catID' => 6,
                'name' => 'multiple unit',
                'description' => 'Reizigerstreinen die uit meerdere delen bestaan. Geen locomotief meer nodig.'
            ],[
                'catID' => 7,
                'name' => 'sprinter',
                'description' => 'Lichte treinen voor een snel optrekkingsvermogen, en gemaakt om snel en comfortabel in/uit te stappen.'
            ],[
                'catID' => 8,
                'name' => 'intercity',
                'description' => 'Zwaardere treinen met hogere topsnelheden, ideaal voor lange afstands reizen.'
            ],[
                'catID' => 9,
                'name' => 'international',
                'description' => 'Treinen die dankzij meerdere systemen ook in het buitenland kunnen rijden'
            ],[
                'catID' => 10,
                'name' => 'coaches',
                'description' => 'Losse rijtuigen, variabele opstellening zonder kwaliteitsverlies'
            ],[
                'catID' => 11,
                'name' => 'oldschool',
                'description' => 'Deze makkers gaan al lang mee en zijn niet kapot te krijgen. De eyecatchers van het nederlandse spoor!'
            ]
        ]);
    }
}