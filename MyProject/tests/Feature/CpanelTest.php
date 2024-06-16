<?php

namespace Tests\Feature;

use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Order;
use App\Models\Worker;
use App\Models\User;

class CpanelTest extends TestCase
{
    protected bool $refreshDB = true;
    /**
     * A basic feature test example.
     */
    public function testCpanelShowOrders(): void
    {
        $user = User::factory()->create([
            'role' => User::ROLE_ADMIN,
        ]);

        $this->actingAs($user);

        $response = $this->get('/cpanel');
        $response->assertStatus(200);

        $worker = Worker::factory()->create(['name' => 'Margarett Cole']);
        Order::factory()->create([
            'workerId' => $worker->id,
            'serviceId' => 1,
            'duration' => 60,
            'price' => 100,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $response->assertSee('Worker: Margarett Cole');
        $response->assertSee('Price: 147');
        $response->assertSee('Duration: 73');
    }
}
