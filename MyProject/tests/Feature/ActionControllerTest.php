<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Service;
use App\Models\Schedule;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Testing\WithoutMiddleware;



class ActionControllerTest extends TestCase
{
    protected bool $refreshDB = true;
    /**
     * A basic feature test example.
     */
    public function testCreationOrder(): void
    {
        $user = User::factory()->create();

        $service = Service::factory()->create();

        $response = $this->actingAs($user)->get(route('set-entity', ['entity' => 'service', 'data' => $service->id]));

        $response->assertRedirect(route('pages.schedules', ['entity' => 'service', 'data' => $service->id]))
            ->assertSessionHas('success', 'Service selected successfully!');

        $this->assertDatabaseHas('orders', [
            'workerId' => $user->id,
            'serviceId' => $service->id,
            'duration' => $service->duration,
            'price' => $service->price,
        ], 'mysql');
    }
}
