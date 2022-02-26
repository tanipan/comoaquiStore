<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Huber;
use App\Models\Car;
use App\Models\Customers;
use App\Models\Adresses;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(1)->create([
            'email' => 'tanipan@gmail.com',
            'password' => Hash::make('wape16kari'),
            'role' => 'admin',
        ]);

        User::factory(50)->create();
        Huber::factory(20)->create();
        Car::factory(20)->create();
        // Customers::factory(20)->create();
        // Adresses::factory(20)->create();
    }
}
