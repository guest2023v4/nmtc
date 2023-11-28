<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pack;

class PackFactory extends Factory
{
    protected $model = Pack::class;

    public function definition()
    {
        return [
            'type' => $this->faker->word, // You can customize the pack type generation
            'for_participants' => $this->faker->boolean,
            'room_type' => $this->faker->word, // You can customize the room type generation
            'hotel_badge' => $this->faker->numberBetween(0, 2),
            'with_bus' => $this->faker->boolean,
             // Adjust the range as needed
        ];
    }

    public function forOrganizers(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'for_participants' => false,
                'amount' => 200,
            ];
        });
    }

    public function forParticipants(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'for_participants' => true,
                'amount' => 230,
            ];
        });
    }
}

