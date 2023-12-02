<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Create two admin users
        User::create([
            'name' => 'Admin 1',
            'email' => 'admin1@example.com',
            'phone' => '1111111111',
            'password' => Hash::make('password'),
            'image' => 'http://127.0.0.1:8000/backend/assets/img/avatars/11.png',
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Admin 2',
            'email' => 'admin2@example.com',
            'phone' => '2222222222',
            'password' => Hash::make('password'),
            'image' => 'http://127.0.0.1:8000/backend/assets/img/avatars/11.png',
            'role' => 'admin',
        ]);

        // Create twelve provider users
        for ($i = 1; $i <= 12; $i++) {
            User::create([
                'name' => "Provider User $i",
                'email' => "provider$i@example.com",
                'phone' => '5555555555',
                'password' => Hash::make('password'),
                'image' => 'http://127.0.0.1:8000/backend/assets/img/avatars/11.png',
                'role' => 'provider',
            ]);
        }

        // Create two customer users
        User::create([
            'name' => 'Marah Abusaleh',
            'email' => 'marah.abusaleh12@gmail.com',
            'phone' => '0791579601',
            'password' => Hash::make('password'),
            'image' => 'http://127.0.0.1:8000/backend/assets/img/avatars/11.png',
            'role' => 'customer',
        ]);

        User::create([
            'name' => 'Customer 2',
            'email' => 'customer2@example.com',
            'phone' => '5675675678',
            'password' => Hash::make('password'),
            'image' => 'http://127.0.0.1:8000/backend/assets/img/avatars/11.png',
            'role' => 'customer',
        ]);

        // Add more users as needed
    }

}
