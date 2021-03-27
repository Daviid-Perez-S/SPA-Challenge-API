<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use EpisodesTableSeeder;

class EpisodeTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * Get all episodes from database.
     *
     * @return void
     */
    public function testGetAllEpisodes()
    {
        $user = factory(User::class)->create();
        // Run Episodes seeder
        $this->seed(EpisodesTableSeeder::class);

        $response = $this->actingAs($user)
                         ->get('/api/episodes');

        $response->assertStatus(200);
    }
}
