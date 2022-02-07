<?php

namespace Tests\Feature;

use App\Models\FeedbackReport;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class FeedbackReportTest extends TestCase
{

    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Sanctum::actingAs(
            User::factory()->create()
        );
    }

    public function test_store(){
        $response = $this->json('POST', '/api/feedback/report', [
            'title' => 'Testing',
            'content' => 'testing content of report',
            'map' => 'testing',
            'gameseconds' => 20,
            'type' => 'other',
            'bundleid' => 'testing'
        ]);

        $response->assertJsonStructure(['id', 'title', 'content', 'map', 'gameseconds', 'type', 'bundleid', 'created_at', 'updated_at'])
            ->assertJson([
                'title' => 'Testing',
                'content' => 'testing content of report',
                'map' => 'testing',
                'gameseconds' => 20,
                'type' => 'other',
                'bundleid' => 'testing'
            ])
            ->assertStatus(201); // OK, resource created

        $this->assertDatabaseHas('feedback_reports', [
            'title' => 'Testing',
            'content' => 'testing content of report',
            'map' => 'testing',
            'gameseconds' => 20,
            'type' => 'other',
            'bundleid' => 'testing'
        ]);
    }
}
