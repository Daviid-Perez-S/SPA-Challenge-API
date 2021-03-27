<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use CharactersTableSeeder;

class CharacterTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Get all characters from database.
     *
     * @return void
     */
    public function testGetAllCharacters()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
                         ->get('/api/characters');

        $response->assertStatus(200);
    }
    
    /**
     * Update a character in database.
     *
     * @return void
     */
    // public function testUpdateCharacter()
    // {
    //     $user = factory(User::class)->create();
    //     // Run Characters seeder
    //     $this->seed(CharactersTableSeeder::class);

    //     $response = $this->actingAs($user)
    //                      ->putJson('/api/characters/1',
    //                         [
    //                             'name' => 'David',
    //                             'location' => 'Algo'
    //                         ]);

    //     $response->assertStatus(200)
    //             ->assertJson([
    //                 'name' => 'David'
    //             ]);
    // }
}
