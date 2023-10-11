<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        
        User::create([
            'name' => 'Example User',
            'email' => 'admin@example.com',
            'phone' => '1234567890',
            'password' => Hash::make('password'),
            'image' => 'http://127.0.0.1:8000/backend/assets/img/avatars/11.png',
            'role' => 'admin',
        ]);

       
    }
}
