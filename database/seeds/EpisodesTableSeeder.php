<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E01',
            'name' => 'To You, in 2000 Years: The Fall of Shiganshina, Part 1',
            'air_date' => '2013-04-07',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E02',
            'name' => 'That Day: The Fall of Shiganshina, Part 2',
            'air_date' => '2013-04-14',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E03',
            'name' => 'A Dim Light Amid Despair: Humanity s Comeback, Part 1',
            'air_date' => '2013-04-21',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E04',
            'name' => 'The Night of the Closing Ceremony: Humanity s Comeback, Part 2',
            'air_date' => '2013-04-28',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E05',
            'name' => 'First Battle: The Struggle for Trost, Part 1',
            'air_date' => '2013-05-05',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E06',
            'name' => 'The World the Girl Saw: The Struggle for Trost, Part 2',
            'air_date' => '2013-05-12',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E07',
            'name' => 'Small Blade: The Struggle for Trost, Part 3',
            'air_date' => '2013-05-19',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E08',
            'name' => '	I Can Hear His Heartbeat: The Struggle for Trost, Part 4',
            'air_date' => '2013-05-26',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E09',
            'name' => 'Whereabouts of His Left Arm: The Struggle for Trost, Part 5',
            'air_date' => '2013-06-02',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E10',
            'name' => 'Response: The Struggle for Trost, Part 6',
            'air_date' => '2013-06-09',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E11',
            'name' => 'Idol: The Struggle for Trost, Part 7',
            'air_date' => '2013-06-16',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E12',
            'name' => 'Wound: The Struggle for Trost, Part 8',
            'air_date' => '2013-06-23',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E13A',
            'name' => 'Primal Desire: The Struggle for Trost, Part 9',
            'air_date' => '2013-06-30',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E13B',
            'name' => 'Since That Day',
            'air_date' => '2013-07-07',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E14',
            'name' => 'Cant Look into His Eyes Yet: Eve of the Counterattack, Part 1',
            'air_date' => '2013-07-14',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E15',
            'name' => 'Special Operations Squad: Eve of the Counterattack, Part 2',
            'air_date' => '2013-07-21',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E16',
            'name' => 'What Needs to be Done Now: Eve of the Counterattack, Part 3',
            'air_date' => '2013-07-28',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E17',
            'name' => 'Female Titan: The 57th Exterior Scouting Mission, Part 1',
            'air_date' => '2013-08-04',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E18',
            'name' => 'Forest of Giant Trees: The 57th Exterior Scouting Mission, Part 2',
            'air_date' => '2013-08-11',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E19',
            'name' => 'Bite: The 57th Exterior Scouting Mission, Part 3',
            'air_date' => '2013-08-18',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E20',
            'name' => 'Erwin Smith: The 57th Exterior Scouting Mission, Part 4',
            'air_date' => '2013-08-25',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E21',
            'name' => 'Crushing Blow: The 57th Exterior Scouting Mission, Part 5',
            'air_date' => '2013-09-01',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E22',
            'name' => 'The Defeated: The 57th Exterior Scouting Mission, Part 6',
            'air_date' => '2013-09-08',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E23',
            'name' => 'Smile: Assault on Stohess, Part 1',
            'air_date' => '2013-09-15',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E24',
            'name' => 'Mercy: Assault on Stohess, Part 2',
            'air_date' => '2013-09-22',
        ]);
        
        DB::table('episodes')->insert([
            'sku' => 'SNK_S1E25',
            'name' => 'Wall: Assault on Stohess, Part 3',
            'air_date' => '2013-09-29',
        ]);
    }
}
