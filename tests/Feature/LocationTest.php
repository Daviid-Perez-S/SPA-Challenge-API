<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use LocationsTableSeeder;

class LocationTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * Get all locations from database.
     *
     * @return void
     */
    public function testGetAllLocations()
    {
        $user = factory(User::class)->create();
        // Run Locations seeder
        $this->seed(LocationsTableSeeder::class);

        $response = $this->actingAs($user)
                         ->get('/api/locations');

        $response->assertStatus(200);
    }
}
