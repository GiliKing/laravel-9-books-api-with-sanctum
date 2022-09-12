<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $headers = [
            "Accept" => "application/vnd.api+json",
            "Content-Type" => "application/vnd.api+json"
        ];

         
        $response = $this->getJson('api/comments/all', $headers);

        $response = $this->getJson('api/comments/latest', $headers);

        $response = $this->getJson('api/comments/oldest', $headers);

        $response->assertStatus(200);
    }
}
