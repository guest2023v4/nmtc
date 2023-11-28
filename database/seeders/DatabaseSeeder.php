<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\Pack;
use App\Models\RoomType;
use App\Models\Collect;
use App\Models\Activity;
use App\Models\Team;
use App\Models\Room;
use App\Models\Bus;
use App\Models\User;
use App\Models\Participate;
use App\Models\JoinRoomRequest;
use App\Models\JoinTeamRequest;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('controls')->insert(['registration' => true, "rooms" => true, "bus" => false, "teams" => true, "payment" => false]);
        Pack::factory(1)->forParticipants()->create();
        Pack::factory(1)->forOrganizers()->create();
        // $table_users = ['super_admin', 'admin', 'organizer', 'payagent', 'challenger', 'visitor', 'user'];
        // for ($i = 0; $i <= 6; $i++) {
        //     DB::table('users')->insert([
        //         'name' => $table_users[$i],
        //         'email' => $table_users[$i] . '@example.com',
        //         'cin' => rand(0, 1) . '' . rand(1000000, 9999999),
        //         'phone' => Str::random(10),
        //         'role' => $i,
        //         'password' => Hash::make('password'),
        //         'reg_step' => 3,
        //         'birthday' => now()->subYears(rand(18, 30)),
        //         'city' => Str::random(10),
        //         'gender' => 'M',
        //         'level_of_study' => Str::random(10),
        //         'university' => Str::random(10),
        //         'picture' => null,
        //         'bank_transfer' => null,
        //         'pay_status_pack' => 0,
        //         'pay_status_bus' => 0,
        //         'pay_amount_total' => 0,
        //         'pack_valid' => rand(0, 1),
        //         'madhmoun' => null,
        //         'github' => null,
        //         'linkedin' => null,
        //         'cv' => null,
        //         'transport' => rand(0, 2),
        //         'email_verified_at' => now(),
        //         'remember_token' => Str::random(10),
        //         'pack_id' => 2,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }
        DB::table('room_types')->insert(['label' => 1, "rooms_nb" => 0, "created_at" => now(), "updated_at" => now()]);
        DB::table('room_types')->insert(['label' => 2, "rooms_nb" => 150, "created_at" => now(), "updated_at" => now()]);
        DB::table('room_types')->insert(['label' => 3, "rooms_nb" => 60, "created_at" => now(), "updated_at" => now()]);
        DB::table('room_types')->insert(['label' => 4, "rooms_nb" => 30, "created_at" => now(), "updated_at" => now()]);

        // RoomType::factory(4)->create();
        // Team::factory(30)->create();
        // Room::factory(100)->create();
        DB::table('buses')->insert([
            'city' => "Sfax",
            'station' => "Sakiet Ezzit",
            'hour' => "6:00",
            'price' => 30,
            'capacity' => 49,
            'attendance_nb' => 0,
            'responsable1_id' => null,
            'responsable2_id' => null,
        ]);
        DB::table('buses')->insert([
            'city' => "Sfax",
            'station' => "Sakiet Ezzit",
            'hour' => "6:00",
            'price' => 30,
            'capacity' => 49,
            'attendance_nb' => 0,
            'responsable1_id' => null,
            'responsable2_id' => null,
        ]);
        DB::table('buses')->insert([
            'city' => "Sfax",
            'station' => "Medecine",
            'hour' => "6:00",
            'price' => 30,
            'capacity' => 49,
            'attendance_nb' => 0,
            'responsable1_id' => null,
            'responsable2_id' => null,
        ]);
        DB::table('buses')->insert([
            'city' => "Sfax",
            'station' => "Medecine",
            'hour' => "6:00",
            'price' => 30,
            'capacity' => 49,
            'attendance_nb' => 0,
            'responsable1_id' => null,
            'responsable2_id' => null,
        ]);
        DB::table('buses')->insert([
            'city' => "Tunis",
            'station' => "ESPRIT",
            'hour' => "6:00",
            'price' => 30,
            'capacity' => 49,
            'attendance_nb' => 0,
            'responsable1_id' => null,
            'responsable2_id' => null,
        ]);
        // User::factory(50)->noPayagent()->create();
        // User::factory(50)->create();
        // Activity::factory(50)->create();
        // Collect::factory(50)->create();
        // Participate::factory(20)->create();
        // JoinTeamRequest::factory(20)->create();
        // JoinRoomRequest::factory(20)->create();
    }
}
