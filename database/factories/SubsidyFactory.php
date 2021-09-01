<?php

namespace Database\Factories;

use App\Models\Subsidy;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubsidyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subsidy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subsidy_type'=>$this->faker->randomElement($array = array ('Cash', 'Relief Goods')),
            'subsidy_description'=>$this->faker->paragraph,
            'subsidy_date'=>$this->faker->date(now()),
        ];
    }
}
