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
            'image' => 'https://firebasestorage.googleapis.com/v0/b/hosting-personal-5fb40.appspot.com/o/spa-challenge-api-images%2Feren-yeager.png?alt=media&token=8e2e2555-0b43-4c80-ac8b-df9c66b75f56',
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
            'image' => 'https://firebasestorage.googleapis.com/v0/b/hosting-personal-5fb40.appspot.com/o/spa-challenge-api-images%2Farmin-arlert.png?alt=media&token=d0a314ba-38b9-4989-8f04-99b5051bed80',
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
            'image' => 'https://firebasestorage.googleapis.com/v0/b/hosting-personal-5fb40.appspot.com/o/spa-challenge-api-images%2Fmikasa-ackerman.png?alt=media&token=c2ba7b84-1ca6-4c42-adf0-6cd1d34b7c6d',
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
            'image' => 'https://firebasestorage.googleapis.com/v0/b/hosting-personal-5fb40.appspot.com/o/spa-challenge-api-images%2Flevi-ackerman.png?alt=media&token=ce539645-9cca-4b6c-b428-9b164c86cd67',
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
            'image' => 'https://firebasestorage.googleapis.com/v0/b/hosting-personal-5fb40.appspot.com/o/spa-challenge-api-images%2Freiner-braun.png?alt=media&token=b5bf9db1-1a41-4aa5-bda7-519d5a33dd79',
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
            'image' => 'https://firebasestorage.googleapis.com/v0/b/hosting-personal-5fb40.appspot.com/o/spa-challenge-api-images%2Fhistoria-reiss.png?alt=media&token=09b83e51-995c-4437-a1e7-c4e9f5aab37b',
            'episode' => '[]',
        ]);
    }
}
