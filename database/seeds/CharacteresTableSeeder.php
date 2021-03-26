<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacteresTableSeeder extends Seeder
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
            'image' => 'https://static.wikia.nocookie.net/shingeki-no-kyojin/images/6/64/Eren_Jaeger_854_%28Anime%29.png/revision/latest/scale-to-width-down/350?cb=20210305233525&path-prefix=es',
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
            'image' => 'https://static.wikia.nocookie.net/shingeki-no-kyojin/images/9/97/Armin_Arlert_854_%28Anime%29.png/revision/latest/scale-to-width-down/350?cb=20210305233250&path-prefix=es',
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
            'image' => 'https://static.wikia.nocookie.net/shingeki-no-kyojin/images/f/f2/Mikasa_Ackerman_854_%28Anime%29.png/revision/latest/scale-to-width-down/350?cb=20210222031259&path-prefix=es',
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
            'image' => 'https://static.wikia.nocookie.net/shingeki-no-kyojin/images/2/22/Levi_Ackerman_854_%28Anime%29.png/revision/latest/scale-to-width-down/350?cb=20210125035215&path-prefix=es',
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
            'image' => 'https://static.wikia.nocookie.net/shingeki-no-kyojin/images/f/f5/Reiner_Braun_854_%28Anime%29.png/revision/latest/scale-to-width-down/350?cb=20201214025457&path-prefix=es',
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
            'image' => 'https://static.wikia.nocookie.net/shingeki-no-kyojin/images/8/84/Historia_Reiss_854_%28Anime%29.png/revision/latest/scale-to-width-down/350?cb=20210215041632&path-prefix=es',
            'episode' => '[]',
        ]);
    }
}
