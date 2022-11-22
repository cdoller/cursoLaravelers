<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserEndPointsTest extends TestCase
{
    public function test_user_index_endpoint()
    {
        $headers = [
            'Authorization' => config('test.token'),
        ];

        $payload = [];

        $this->json('GET', '/api/user/index', $payload, $headers)
            ->assertStatus(200);
    }
}
