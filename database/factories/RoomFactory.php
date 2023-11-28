<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\User;

class RoomFactory extends Factory
{
    protected $model = Room::class;

    public function definition()
    {
        // Randomly select a room type
        $roomType = RoomType::inRandomOrder()->first();

        // Randomly select a room leader (user)
        $roomLeader = User::inRandomOrder()->first();
        $gender = rand(0,2);
        $family_case = $gender == 2 ? $this->faker->numberBetween(0, 1) : null;

        return [
            'num' => $this->faker->unique()->numberBetween(1, 100),
            'gender' => $gender,
            'note' => $this->faker->sentence,
            'capacity' => $this->faker->numberBetween(2, 4),
            'family_case' => $gender == 2 ? $this->faker->numberBetween(0, 1) : null,
            'confirmed' => null,
            'code' => $this->faker->word,
            'type' => $this->faker->numberBetween(0, 1),
            'is_all_paid' => $this->faker->boolean,
            'real_num' => $this->faker->numberBetween(101, 300),
            'have_key' => $this->faker->boolean,
            'room_type_id' => $roomType->id,
            'room_leader_id' => null,
            'user_have_key_id' => null, // You can adjust this based on your data
        ];
    }
}

