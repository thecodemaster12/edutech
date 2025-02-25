<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        User::factory()->create([
            'name' => 'Teacher',
            'email' => 'teacher@teacher.com',
            'password' => Hash::make('password'),
            'role' => 'teacher'
        ]);

        User::factory()->create([
            'name' => 'Student',
            'email' => 'student@student.com',
            'password' => Hash::make('password'),
            'role' => 'student'
        ]);
    }
}
