<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Create an admin user
        User::create([
            'name' => 'Example User',
            'email' => 'admin@example.com',
            'phone' => '1234567890',
            'password' => Hash::make('password'),
            'image' => 'http://127.0.0.1:8000/backend/assets/img/avatars/11.png',
            'role' => 'admin',
        ]);

        // Create additional provider users
        User::create([
            'name' => 'Provider User 1',
            'email' => 'provider1@example.com',
            'phone' => '9876543210',
            'password' => Hash::make('password'),
            'image' => 'http://127.0.0.1:8000/backend/assets/img/avatars/11.png',
            'role' => 'provider',
        ]);

        User::create([
            'name' => 'Provider User 2',
            'email' => 'provider2@example.com',
            'phone' => '5555555555',
            'password' => Hash::make('password'),
            'image' => 'http://127.0.0.1:8000/backend/assets/img/avatars/11.png',
            'role' => 'provider',
        ]);

        User::create([
            'name' => 'Provider User 3',
            'email' => 'provider3@example.com',
            'phone' => '5555655555',
            'password' => Hash::make('password'),
            'image' => 'http://127.0.0.1:8000/backend/assets/img/avatars/11.png',
            'role' => 'provider',
        ]);

        User::create([
            'name' => 'Provider User 4',
            'email' => 'provider4@example.com',
            'phone' => '5555455555',
            'password' => Hash::make('password'),
            'image' => 'http://127.0.0.1:8000/backend/assets/img/avatars/11.png',
            'role' => 'provider',
        ]);

        User::create([
            'name' => 'Provider User 5',
            'email' => 'provider5@example.com',
            'phone' => '5355455555',
            'password' => Hash::make('password'),
            'image' => 'http://127.0.0.1:8000/backend/assets/img/avatars/11.png',
            'role' => 'provider',
        ]);

        User::create([
            'name' => 'Provider User 6',
            'email' => 'provider6@example.com',
            'phone' => '5655455555',
            'password' => Hash::make('password'),
            'image' => 'http://127.0.0.1:8000/backend/assets/img/avatars/11.png',
            'role' => 'provider',
        ]);

        User::create([
            'name' => 'Customer 1',
            'email' => 'customer1@example.com',
            'phone' => '1231231234',
            'password' => Hash::make('password'),
            'image' => 'http://127.0.0.1:8000/backend/assets/img/avatars/11.png',
            'role' => 'customer',
        ]);

        // Add more users as needed
    }
}
