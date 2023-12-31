<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;


class MenuItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Seed 8 breakfast menu items
        for ($i = 1; $i <= 8; $i++) {
            Menu::create([
                'restaurant_id' => 1, // Replace with the restaurant's ID
                'name' => "Breakfast Item $i",
                'image' => "frontend/img2/menu/menu-item-$i.png",
                'description' => "Description for Breakfast Item $i",
                'price' => 8.99 + $i, // Adjust the price as needed
                'type' => 'breakfast',
            ]);
        }

        // Seed 7 lunch menu items
        for ($i = 1; $i <= 8; $i++) {
            Menu::create([
                'restaurant_id' => 1, // Replace with the restaurant's ID
                'name' => "Lunch Item $i",
                'image' => "frontend/img2/menu/menu-item-$i.png", // Fixed image path typo
                'description' => "Description for Lunch Item $i",
                'price' => 12.99 + $i, // Adjust the price as needed
                'type' => 'launch',
            ]);
        }

        // Seed 7 dinner menu items
        for ($i = 1; $i <= 8; $i++) {
            Menu::create([
                'restaurant_id' => 1, // Replace with the restaurant's ID
                'name' => "Dinner Item $i",
                'image' => "frontend/img2/menu/menu-item-$i.png",
                'description' => "Description for Dinner Item $i",
                'price' => 18.99 + $i, // Adjust the price as needed
                'type' => 'dinner',
            ]);
        }



        // Seed 8 breakfast menu items
        for ($i = 1; $i <= 8; $i++) {
            Menu::create([
                'restaurant_id' => 2, // Replace with the restaurant's ID
                'name' => "Breakfast Item $i",
                'image' => "frontend/img2/menu/menu-item-$i.png",
                'description' => "Description for Breakfast Item $i",
                'price' => 8.99 + $i, // Adjust the price as needed
                'type' => 'breakfast',
            ]);
        }

        // Seed 7 lunch menu items
        for ($i = 1; $i <= 8; $i++) {
            Menu::create([
                'restaurant_id' => 2, // Replace with the restaurant's ID
                'name' => "Lunch Item $i",
                'image' => "frontend/img2/menu/menu-item-$i.png", // Fixed image path typo
                'description' => "Description for Lunch Item $i",
                'price' => 12.99 + $i, // Adjust the price as needed
                'type' => 'launch',
            ]);
        }

        // Seed 7 dinner menu items
        for ($i = 1; $i <= 8; $i++) {
            Menu::create([
                'restaurant_id' => 2, // Replace with the restaurant's ID
                'name' => "Dinner Item $i",
                'image' => "frontend/img2/menu/menu-item-$i.png",
                'description' => "Description for Dinner Item $i",
                'price' => 18.99 + $i, // Adjust the price as needed
                'type' => 'dinner',
            ]);
        }
    }
}
