<?php

namespace Database\Factories;

use App\Models\People;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->firstName().' '.$this->faker->lastName();
        $username = strtolower(explode(" ",$name)[0]).$this->faker->numerify('####');
        return [
            'id'=> $this->faker->uuid(),
            'nik'=> $this->faker->numerify('#####'),
            'name' => $name,
            'username' => $username,
            'password' => Hash::make($username),
            'phone_number' => $this->faker->phoneNumber(),
        ];
    }
}
