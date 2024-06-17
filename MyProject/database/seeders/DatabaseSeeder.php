<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Order;
use App\Models\Schedule;
use Database\Factories\OrderFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Service;
use App\Models\Worker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->initBaseEntities();
        $this->buildBaseRelations();
    }

    private function initBaseEntities(): void
    {
        Order::factory(10)->create();
        Worker::factory(3)->create();
        Service::factory(6)->create();
        Company::create([
           'name' => 'Mens',
           'address' => fake()->address
        ]);
    }

    private function buildBaseRelations(): void
    {
        $workers = Worker::all();
        $services = Service::all();
        $company = Company::first();

        $company->workers()->attach($workers);
        $company->services()->attach($services);

        $workers->each(function ($worker) use ($services){
            $worker->services()->attach($services->random(mt_rand(1, 6)));
            Schedule::factory()->make(['worker_id' => $worker])->save();
       });
    }
}


