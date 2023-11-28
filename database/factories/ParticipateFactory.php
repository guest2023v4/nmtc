<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Participate;
use App\Models\User;
use App\Models\Activity;

class ParticipateFactory extends Factory
{
    protected $model = Participate::class;

    public function definition()
    {
        // Randomly select a user and an activity
        $user = User::inRandomOrder()->first();
        $activity = Activity::where('type', 0)->inRandomOrder()->first();

        return [
            'user_id' => $user->id,
            'activity_id' => $activity->id,
            'check_in' => $this->faker->boolean,
            'check_out' => $this->faker->boolean,
            'certification' => $this->faker->word, // You can customize certification generation
        ];
    }
}

