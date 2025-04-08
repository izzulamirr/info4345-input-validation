<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // Import the User model

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name" => "user1",
                "email" => "user1@gmail.com",
                "password" => bcrypt("12345678"), // Encrypt the password
            ],
            [
                "name" => "user2",
                "email" => "user2@gmail.com",
                "password" => bcrypt("12345678"), // Encrypt the password
            ],
            // Add more user arrays as needed
        ];
    
        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}