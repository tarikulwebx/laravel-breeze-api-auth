<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Tarikul Islam',
            'email' => 'tarikulwebx@gmail.com',
            'password' => 'password'
        ]);
        User::factory(10)->create();
    }
}
