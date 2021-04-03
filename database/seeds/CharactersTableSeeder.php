<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            'name' => 'Eren Yeager',
            'status' => 'Alive',
            'species' => 'Human',
            'type' => 'Intelligent Titan',
            'gender' => 'Male',
            'origin' => '{"name":"To You, 2,000 Years From Now","link":"https://attackontitan.fandom.com/wiki/To_You,_2,000_Years_From_Now"}',
            'location' => '{"name":"Wall Rose","link":"https://attackontitan.fandom.com/wiki/Wall_Rose"}',
            'image' => env('APP_URL').'/storage/images/eren-yeager.png',
            'episode' => '[]',
        ]);
        
        DB::table('characters')->insert([
            'name' => 'Armin Arlert',
            'status' => 'Alive',
            'species' => 'Human',
            'type' => 'Intelligent Titan',
            'gender' => 'Male',
            'origin' => '{"name":"To You, 2,000 Years From Now","link":"https://attackontitan.fandom.com/wiki/To_You,_2,000_Years_From_Now"}',
            'location' => '{"name":"Wall Rose","link":"https://attackontitan.fandom.com/wiki/Wall_Rose"}',
            'image' => env('APP_URL').'/storage/images/armin-arlert.png',
            'episode' => '[]',
        ]);
        
        DB::table('characters')->insert([
            'name' => 'Mikasa Ackerman',
            'status' => 'Alive',
            'species' => 'Human',
            'type' => 'None',
            'gender' => 'Female',
            'origin' => '{"name":"To You, 2,000 Years From Now","link":"https://attackontitan.fandom.com/wiki/To_You,_2,000_Years_From_Now"}',
            'location' => '{"name":"Wall Rose","link":"https://attackontitan.fandom.com/wiki/Wall_Rose"}',
            'image' => env('APP_URL').'/storage/images/mikasa-ackerman.png',
            'episode' => '[]',
        ]);
        
        DB::table('characters')->insert([
            'name' => 'Levi Ackerman',
            'status' => 'Alive',
            'species' => 'Human',
            'type' => 'None',
            'gender' => 'Male',
            'origin' => '{"name":"Captain Levi","link":"https://attackontitan.fandom.com/wiki/Captain_Levi_(Chapter)"}',
            'location' => '{"name":"Wall Rose","link":"https://attackontitan.fandom.com/wiki/Wall_Rose"}',
            'image' => env('APP_URL').'/storage/images/levi-ackerman.png',
            'episode' => '[]',
        ]);
        
        DB::table('characters')->insert([
            'name' => 'Reiner Braun',
            'status' => 'Alive',
            'species' => 'Human',
            'type' => 'Intelligent Titan',
            'gender' => 'Male',
            'origin' => '{"name":"That Day","link":"https://attackontitan.fandom.com/wiki/That_Day_(Chapter_2)"}',
            'location' => '{"name":"Liberio","link":"https://attackontitan.fandom.com/wiki/Liberio"}',
            'image' => env('APP_URL').'/storage/images/reiner-braun.png',
            'episode' => '[]',
        ]);
        
        DB::table('characters')->insert([
            'name' => 'Historia Reiss',
            'status' => 'Alive',
            'species' => 'Human',
            'type' => 'None',
            'gender' => 'Female',
            'origin' => '{"name":"That Day","link":"https://attackontitan.fandom.com/wiki/That_Day_(Chapter_2)"}',
            'location' => '{"name":"Wall Rose","link":"https://attackontitan.fandom.com/wiki/Wall_Rose"}',
            'image' => env('APP_URL').'/storage/images/historia-reiss.png',
            'episode' => '[]',
        ]);
    }
}
