<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Team;
use App\Models\User;

class TeamFactory extends Factory
{
    protected $model = Team::class;

    public function definition()
    {
        // Randomly select a team leader (user)
        $teamLeader = User::inRandomOrder()->first();

        return [
            'name' => $this->faker->word, // You can customize the team name generation
            'type' => $this->faker->numberBetween(0, 1), // You can customize the team type generation
            'logo' => $this->faker->imageUrl(), // You can customize the logo generation
            'capacity' => $this->faker->numberBetween(2, 4),
            'is_all_paid' => $this->faker->boolean,
            'code' => $this->faker->word, // You can customize the team code generation
            'team_leader_id' => null,
        ];
    }
}

