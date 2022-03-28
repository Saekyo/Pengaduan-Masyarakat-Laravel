<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
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
            'name' => $name,
            'username' => $username,
            'password' => Hash::make($username),
            'phone_number' => $this->faker->phoneNumber(),
            'role' => $this->faker->randomElement(config('constant.user.role'))
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
