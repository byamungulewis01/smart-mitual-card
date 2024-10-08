<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\MutualCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'BYAMUNGU Lewis',
        //     'email' => 'byamungulewis@gmail.com',
        //     'phone' => '0785436135',
        //     'role' => 'Administrator',
        //     'status' => 'active',
        //     'password' => 'byamungu',
        // ]);

        Setting::create([
            'name' => 'payment',
            'value' => false,
        ]);


        // MutualCategory::create([
        //     'name' => 'A',
        //     'amount' => 1200,
        // ]);
        // MutualCategory::create([
        //     'name' => 'B',
        //     'amount' => 9000,
        // ]);
        // MutualCategory::create([
        //     'name' => 'C',
        //     'amount' => 6000,
        // ]);
        // MutualCategory::create([
        //     'name' => 'D',
        //     'amount' => 3000,
        // ]);
    }
}
