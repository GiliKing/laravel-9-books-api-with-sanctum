<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserLoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $data = [
            "email" => "ok@gmail.com",
            "password" => "test12345",
        ];

        $headers = [
            "Accept" => "application/vnd.api+json",
            "Content-Type" => "application/vnd.api+json"
        ];

         
        $response = $this->postJson('api/login', $data, $headers);

        $response->assertStatus(200);
    }
}
