<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SnsControllerTest extends TestCase
{
    public function testkSnsController()
    {
        $response = $this->json('POST', '/api/aws/sns/snsProjectTestTopic', ['test' => 'test']);

        $response->assertStatus(200);
    }
}
