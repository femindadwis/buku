<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' =>bcrypt('password'),
        ]);

        $user = User::create([
            'name' => 'User',
            'username' => 'User',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'password' =>bcrypt('password'),
        ]);
    }
}
