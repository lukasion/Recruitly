<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function testUserCantLoginWithInvalidCredentials()
    {
        $email = 'asasdad@gmail.com';
        $password = 'password123';

        $user = User::factory()->create([
            'email' => $email,
            'password' => bcrypt($password),
        ]);

        $response = $this->post('/login', [
            'email' => $email,
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrors();

        $this->assertGuest();
    }

    public function testUserCanLoginWithValidCredentials()
    {
        $email = 'test1234@example.com';
        $password = 'password123';

        $user = User::factory()->create([
            'email' => $email,
            'password' => bcrypt($password),
        ]);

        $response = $this->post('/login', [
            'email' => $email,
            'password' => $password,
        ]);

        $response->assertRedirect('/');

        $this->assertAuthenticatedAs($user);
    }
}
