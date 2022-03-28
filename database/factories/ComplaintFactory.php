<?php

namespace Database\Factories;

use App\Models\Complaint;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class ComplaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //$name = $this->faker->firstName().' '.$this->faker->lastName();
        //$username = strtolower(explode(" ",$name)[0]).$this->faker->numerify('####');
        //'username' => $username,
        //'password' => Hash::make($username),

        return [

            'nik'=> $this->faker->numerify('#####'),
            'name' => $this->faker->firstName(),
            'address' => $this->faker->address(),
            'phone_number' => $this->faker->phoneNumber(),
            'report' => $this->faker->numerify('#####'),
            'status' => $this->faker->randomElement(config('constant.complaint.status'))
        ];

    }
}
