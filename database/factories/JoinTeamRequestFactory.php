<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\JoinTeamRequest;
use App\Models\User;
use App\Models\Team;

class JoinTeamRequestFactory extends Factory
{
    protected $model = JoinTeamRequest::class;

    public function definition()
    {
        // Randomly select a user and a team
        $user = User::inRandomOrder()->first();
        $team = Team::inRandomOrder()->first();

        return [
            'user_id' => $user->id,
            'team_id' => $team->id,
            'status' => $this->faker->numberBetween(0, 2), // Adjust the range as needed
        ];
    }
}

