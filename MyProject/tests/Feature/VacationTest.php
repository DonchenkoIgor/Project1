<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class VacationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testCorrectVacationDays(): void
    {
        $startDate = '2024-07-01';
        $duration = 5;

        $response = $this->get("/vacation/{$startDate}/{$duration}");
        $response->assertStatus(200)
            ->assertSee("Ви запросили відпустку з {$startDate} до 2024-07-06.");
    }

    public function testInCorrectVacationDays(): void
    {
        $startDate = '2024-07-01';
        $duration = 7;

        $response = $this->get("/vacation/{$startDate}/{$duration}");
        $response->assertStatus(200)
            ->assertSee("Неприпустима тривалість відпустки");
    }
}
