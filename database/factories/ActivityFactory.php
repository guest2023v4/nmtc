<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Activity;
use App\Models\User;

class ActivityFactory extends Factory
{
    protected $model = Activity::class;

    public function definition()
    {
        // Randomly select an organizer (user)
        $organizer = User::where('role', 2)->inRandomOrder()->first();
        $capacity = $this->faker->numberBetween(30, 40);

        return [
            'title' => $this->faker->sentence(3),
            'date' => $this->faker->numberBetween(1, 3),
            'responsable_name' => $this->faker->name,
            'room' => $this->faker->word,
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time(),
            'training_level' => $this->faker->sentence(1),
            'dedicated' => $this->faker->numberBetween(1, 10),
            'type' => $this->faker->numberBetween(0, 2),
            'capacity' => $capacity,
            'attendance_nb' => $this->faker->numberBetween(0, $capacity),
            'organizer_id' => $organizer->id,
        ];
    }
}

