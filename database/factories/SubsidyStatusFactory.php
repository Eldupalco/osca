<?php

namespace Database\Factories;

use App\Models\Citizen;
use App\Models\Subsidy;
use App\Models\SubsidyStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubsidyStatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SubsidyStatus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'citizen_uid'=>$this->factoryForModel(Citizen::class),
            'subsidy_uid'=>$this->factoryForModel(Subsidy::class),
            'status_receive'=>$this->faker->randomElement($array = array ('Received', 'Not Yet')),
            'date_receive'=>$this->faker->date(now()),
        ];
    }
}
