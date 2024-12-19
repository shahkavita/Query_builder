<?php

namespace Database\Seeders;
use App\Models\student;
use App\Models\User;
use App\Models\city;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      /*  student::factory(10)->create();
        student::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'age'=>20
        ]);
        /*$this->call([
            citySeeder::class
        ]);
        // User::factory(10)->create();
        /*city::factory(10)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }
}
