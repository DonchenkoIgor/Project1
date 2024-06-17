<?php

namespace Tests\Feature;

use App\Models\Schedule;
use App\Models\Service;
use App\Models\Worker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    protected bool $refreshDB = true;
    /**
     * A basic feature test example.
     */
    public function testServices(): void
    {
        $response = $this->get('/api/services');

        $response->assertStatus(200);
        $response->assertJsonIsArray('data');
        $response->assertJsonCount(Service::count(),'data');

        $services = $response->json('data');

        $this->assertArrayHasKey('name', $services[0]);
        $this->assertArrayHasKey('price', $services[0]);
        $this->assertIsNumeric($services[0] ['price']);
        $this->assertArrayHasKey('duration', $services[0]);
        $this->assertIsNumeric($services[0] ['duration']);
    }

    public function testStaff() : void
    {
        $response = $this->get('/api/staff');

        $response->assertStatus(200);
        $response->assertJsonIsArray('data');
        $response->assertJsonCount(Worker::count(),'data');

        $staff = $response->json('data');

        $this->assertArrayHasKey('id', $staff[0]);
        $this->assertIsNumeric($staff[0]['id']);
        $this->assertArrayHasKey('name', $staff[0]);
        $this->assertArrayHasKey('status', $staff[0]);
        $this->assertArrayHasKey('avatar', $staff[0]);
        $this->assertArrayHasKey('bio', $staff[0]);
    }

    public function testSchedule() : void
    {
        $existingSchedule = Schedule::first();

        $response = $this->get('/api/schedules');

        $response->assertStatus(200);
        $response->assertJsonIsArray('data');
        $response->assertJsonCount(Schedule::count(),'data');

        $schedule = $response->json('data');

        $this->assertArrayHasKey('id', $schedule[0]);
        $this->assertIsNumeric($schedule[0]['id']);
        $this->assertArrayHasKey('monday', $schedule[0]);
        $this->assertArrayHasKey('tuesday', $schedule[0]);
        $this->assertArrayHasKey('wednesday', $schedule[0]);
        $this->assertArrayHasKey('thursday', $schedule[0]);
        $this->assertArrayHasKey('friday', $schedule[0]);
        $this->assertArrayHasKey('saturday', $schedule[0]);
        $this->assertArrayHasKey('sunday', $schedule[0]);

        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'worker_id',
                    'monday',
                    'tuesday',
                    'wednesday',
                    'thursday',
                    'friday',
                    'saturday',
                    'sunday',
                ],
            ],
        ]);

        $response->assertJsonFragment([
            'id' => $existingSchedule->id,
            'worker_id' => $existingSchedule->worker_id,
            'monday' => json_decode($existingSchedule->monday, true),
            'tuesday' => json_decode($existingSchedule->tuesday, true),
            'wednesday' => json_decode($existingSchedule->wednesday, true),
            'thursday' => json_decode($existingSchedule->thursday, true),
            'friday' => json_decode($existingSchedule->friday, true),
            'saturday' => json_decode($existingSchedule->saturday, true),
            'sunday' => json_decode($existingSchedule->sunday, true),
        ]);
    }
}
