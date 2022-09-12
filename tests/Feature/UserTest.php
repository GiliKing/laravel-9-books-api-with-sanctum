<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {

        $data = [
            "name" => fake()->name(),
            "email" => fake()->email(),
            "password" => "test12345",
            "password_confirmation" => "test12345"
        ];

        $headers = [
            "Accept" => "application/vnd.api+json",
            "Content-Type" => "application/vnd.api+json"
        ];

         
        $response = $this->postJson('api/register', $data, $headers);

        $response->assertStatus(200);
    }
}
