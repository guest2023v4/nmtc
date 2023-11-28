<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\JoinRoomRequest;
use App\Models\User;
use App\Models\Room;

class JoinRoomRequestFactory extends Factory
{
    protected $model = JoinRoomRequest::class;

    public function definition()
    {
        // Randomly select a user and a room
        $user = User::inRandomOrder()->first();
        $room = Room::inRandomOrder()->first();

        return [
            'user_id' => $user->id,
            'room_id' => $room->id,
            'status' => $this->faker->numberBetween(0, 2), // Adjust the range as needed
        ];
    }
}

