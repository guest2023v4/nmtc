<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Pack;
use App\Models\Room;
use App\Models\Team;
use App\Models\Bus;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        // Randomly select related models
        $payagent = User::where('role', 3)->inRandomOrder()->first();
        $payagent_bus = User::where('role', 3)->inRandomOrder()->first();
        $pack = Pack::inRandomOrder()->first();
        $room = Room::inRandomOrder()->first();
        $team = Team::inRandomOrder()->first();
        $bus = Bus::inRandomOrder()->first();
        $role = rand(0,6);
        $withBus = rand(0,1);
        $pay_status_pack = rand(1,2); 
        $pay_status_bus = 0;
        if($pay_status_pack ==0)
            $pay_status_bus = 0;
        else if($pay_status_pack == 2)
            $pay_status_bus = 2; 
        else if($pay_status_pack == 1)
            $pay_status_bus = rand(1,2);
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'cin' => $this->faker->unique()->randomNumber(8),
            'phone' => $this->faker->phoneNumber,
            'role' => $role,
            'password' => Hash::make('password'),
            'reg_step' => $this->faker->numberBetween(0, 3),
            'birthday' => $this->faker->date,
            'city' => $this->faker->city,
            'gender' => $this->faker->randomElement(['M', 'F']),
            'level_of_study' => $this->faker->sentence(1),
            'university' => $this->faker->sentence(1),
            'cin_front' => null,
            'cin_back' => null,
            'picture' => null,
            'bank_transfer' => null,
            'pay_status_pack' =>  $pay_status_pack,
            'pay_status_bus' =>  $withBus ? $pay_status_bus : 0,
            'pay_amount_total' => $pay_status_pack == 1 ? $this->faker->randomElement([230, 250, 270, 290, 300]) : 0,
            'pack_valid' => $this->faker->boolean,
            'madhmoun' => $this->faker->sentence(1),
            'github' => null,
            'linkedin' => null,
            'cv' => null,
            'transport' => $withBus,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'pack_id' => ($role == 4 || $role == 5 || $role == 6) ? 1 : 2,
            'payagent_id' => $payagent,
            'payagent_bus_id' => $withBus ? $payagent_bus : null,
            'room_id' => $room->id,
            'team_id' => $team->id,
            'bus_id' => $withBus ? $bus->id : null,
        ];
    }

    public function noPayagent(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'pay_status_pack' =>0,
                'pay_status_bus' =>0,
                'pay_amount_total' => 0,
                'payagent_id' => null,
                'payagent_bus_id' => null,
            ];
        });
    }
    
}
