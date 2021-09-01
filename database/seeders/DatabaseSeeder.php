<?php

namespace Database\Seeders;

use Carbon\Factory;
use Database\Factories\UserFactory;
use FactoryMethod;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Citizen::factory(10)->create();
        \App\Models\SubsidyType::factory(2)->create();
        \App\Models\Subsidy::factory(2)->create();

        // \App\Models\SubsidyStatus::factory(10)->create()->each(function($citizen)
        // {
        //     $citizen->citizens()->save(\App\Models\Citizen::factory()->make());
        //     $citizen->subsidy()->save(\App\Models\Subsidy::factory()->make());
        // });
    }
}
