<?php

namespace Database\Factories;

use App\Models\Citizen;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitizenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Citizen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'citizen_id'=> $this->faker->isbn10(),
            'last_name'=> $this->faker->firstName(),
            'first_name'=> $this->faker->lastName(),
            'middle_name'=> $this->faker->lastName(),
            'suffix'=> $this->faker->suffix(),
            'birth_date'=> $this->faker->date(),
            'birth_place'=> $this->faker->address(),
            'address'=> $this->faker->address(),
            'sex'=> $this->faker->randomElement($array = array ('male', 'female')),
            'civil_status'=> $this->faker->randomElement($array = array ('SINGLE', 'MARRIED')),
            'email'=> $this->faker->safeEmail(),
            'contact_number'=> $this->faker->phoneNumber(),
            'ips'=> $this->faker->randomElement($array = array ('Pensioner', 'Supported', 'Indigent')),
            'religion'=> $this->faker->randomElement($array = array ('Roman Catholic', 'Seventh-Day Adventists', 'Jehovahs Witnesses')),
            'GSIS'=> $this->faker->creditCardNumber(),
            'SSS'=> $this->faker->creditCardNumber(),
            'TIN'=> $this->faker->creditCardNumber(),
            'PHILHEALTH'=> $this->faker->creditCardNumber(),
            'emergency_person'=> $this->faker->name(),
            'emergency_number'=> $this->faker->phoneNumber(),
            'birth_certificate_image'=> $this->faker->imageUrl(300,300, 'animals', true, 'cats'),
            'citizen_id_image'=> $this->faker->imageUrl(300,300, 'animals', true, 'dogs'),
            'status'=> $this->faker->randomElement($array = array ('Active', 'Pending','Decease')),
        ];
    }
}
