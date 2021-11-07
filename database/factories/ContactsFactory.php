<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contacts;

class ContactsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     *
     */
    protected $model = Contacts::class;

    public function definition()
    {
        return [
            'fullname' => $this->faker->name(),
            'gender' => $this->faker->numberBetween(1,2),
            'email' => $this->faker->email(),
            'postcode' => $this->faker->postcode(),
            'address' => $this->faker->address(),
            'building_name' => $this->faker->secondaryAddress(),
            'option' => $this->faker-> realText(119)
        ];
    }
}
