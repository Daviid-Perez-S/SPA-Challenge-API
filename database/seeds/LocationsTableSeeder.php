<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'name' => 'Marley',
            'type' => 'Continental mainland',
            'dimension' => 'None',
            'residents' => '[]',
            'url' => 'https://attackontitan.fandom.com/wiki/Marley',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Paradis Island',
            'type' => 'Island',
            'dimension' => 'None',
            'residents' => '[]',
            'url' => 'https://attackontitan.fandom.com/wiki/Paradis_Island',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Shiganshina District',
            'type' => 'District',
            'dimension' => 'None',
            'residents' => '[]',
            'url' => 'https://attackontitan.fandom.com/wiki/Shiganshina_District',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Trost District',
            'type' => 'District',
            'dimension' => 'None',
            'residents' => '[]',
            'url' => 'https://attackontitan.fandom.com/wiki/Trost_District',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Walls',
            'type' => 'Building',
            'dimension' => 'None',
            'residents' => '[]',
            'url' => 'https://attackontitan.fandom.com/wiki/Walls',
        ]);
        
        DB::table('locations')->insert([
            'name' => 'Ragako',
            'type' => 'Town',
            'dimension' => 'None',
            'residents' => '[]',
            'url' => 'https://attackontitan.fandom.com/wiki/Ragako',
        ]);
    }
}
