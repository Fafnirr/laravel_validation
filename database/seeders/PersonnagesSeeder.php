<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonnagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personnages')->insert([
            [
                'nom' => 'Titeuf',
                'annee_de_creation' => '1993',
                'bd_affilie'=> 'Titeuf',
                'dessinateur'=> 'Zep',
            ],
            [
                'nom' => 'Vomito',
                'annee_de_creation' => '1993',
                'bd_affillie' =>'Titeuf',
                'dessinateur'=> 'Zep',
            ],
            [
                'nom' => 'Jay Garrick',
                'annee_de_creation' => '1940',
                'bd_affillie' =>'Flash',
                'dessinateur'=> 'Gardner Fox et Harry Lampert',
            ],
            [
                'nom' => 'Barry Allen',
                'annee_de_creation' => '1956',
                'bd_affillie' =>'Flash',
                'dessinateur'=> 'Gardner Fox et Harry Lampert',
            ]
        ]);
    }
}
