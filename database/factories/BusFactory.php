<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Bus;
use App\Models\User;

class BusFactory extends Factory
{
    protected $model = Bus::class;

    public function definition()
    {
        // Randomly select responsible users
        // $responsable1 = User::inRandomOrder()->first();
        // $responsable2 = User::inRandomOrder()->first();
        $capacity = $this->faker->numberBetween(30, 40);

        return [
            'city' => $this->faker->city,
            'station' => $this->faker->word,
            'hour' => $this->faker->time(),
            'price' => $this->faker->numberBetween(20, 30),
            'capacity' => $capacity,
            'attendance_nb' => $this->faker->numberBetween(0, $capacity),
            'responsable1_id' => null,
            'responsable2_id' => null,
        ];
    }
}

