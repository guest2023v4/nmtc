<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RoomType;

class RoomTypeFactory extends Factory
{
    protected $model = RoomType::class;

    public function definition()
    {
        return [
            'label' => $this->faker->word, // You can customize the label generation
            'rooms_nb' => $this->faker->numberBetween(10, 100), // Number of rooms for this type
        ];
    }
}
