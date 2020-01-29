<?php

use Illuminate\Database\Seeder;
use App\area;

class areaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        area::create([
            'name' => 'Area 1',
        ]);
        area::create([
            'name' => 'Area 2',
        ]);
        area::create([
            'name' => 'Area 3',
        ]);
    }
}
