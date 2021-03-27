<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Save a new user.
     *
     * @return void
     */
    public function testSaveUser()
    {
        // $user = factory(User::class)->create();
        $response = $this->postJson('/api/users',
                    [
                        'name' => 'David',
                        'email' => 'playeando.97@gmail.com',
                        'password' => '12345'
                    ]);

        $response->assertStatus(201)
                    ->assertSee('api_token');
    }
    
    /**
     * Logout user.
     *
     * @return void
     */
    public function testLogoutUser()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)
                        ->get('/api/logout');

        $this->assertAuthenticatedAs($user, false);
        $response->assertStatus(200);
    }
}
