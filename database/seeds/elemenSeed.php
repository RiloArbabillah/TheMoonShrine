<?php

use Illuminate\Database\Seeder;
use App\elemen;

class elemenSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        elemen::create([
            'name' => 'Fire',
            'strong_to' => 'Earth',
        ]);
        elemen::create([
            'name' => 'Earth',
            'strong_to' => 'Wind',
        ]);
        elemen::create([
            'name' => 'Wind',
            'strong_to' => 'Water',
        ]);
        elemen::create([
            'name' => 'Water',
            'strong_to' => 'Fire',
        ]);
        elemen::create([
            'name' => 'Neutral',
            'strong_to' => 'Neutral',
        ]);
        elemen::create([
            'name' => 'Dark',
            'strong_to' => 'Light',
        ]);
        elemen::create([
            'name' => 'Light',
            'strong_to' => 'Dark',
        ]);
    }
}
