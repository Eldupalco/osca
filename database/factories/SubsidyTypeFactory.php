<?php

namespace Database\Factories;

use App\Models\SubsidyType;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubsidyTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SubsidyType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type'=>$this->faker->randomElement($array = array ('Cash', 'Relief Goods')),
        ];
    }
}
