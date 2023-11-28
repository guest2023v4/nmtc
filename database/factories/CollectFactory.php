<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Collect;

class CollectFactory extends Factory
{
    protected $model = Collect::class;

    public function definition()
    {
        // Randomly select two distinct users
        $user1 = User::where('role', 0)->inRandomOrder()->first();
        $user2 = User::where('role', 3)->inRandomOrder()->first();

        while ($user1->id === $user2->id) {
            // Ensure user1 and user2 are distinct
            $user2 = User::inRandomOrder()->first();
        }

        return [
            'admin_id' => $user1->id,
            'payagent_id' => $user2->id,
            'date' => $this->faker->dateTimeThisMonth(),
            'amount' => $this->faker->numberBetween(100, 500),
        ];
    }
}


