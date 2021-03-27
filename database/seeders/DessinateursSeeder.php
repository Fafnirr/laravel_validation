<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DessinateursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dessinateurs')->insert([
            [
                'id' => '1',
                'nom' => 'Zep',
                'annee_de_naissance' => '1967',
                'nationalite' => 'Suisse',
            ],
            [
                'id' => '2',
                'nom' => 'Harry Lampert',
                'annee_de_naissance' => '1916',
                'nationalite' => 'Americain',
            ]
        ]);
    }
}
