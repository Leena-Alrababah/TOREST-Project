<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Table;

class TablesTableSeeder extends Seeder
{
    public function run()
    {
        
        // Define table data
        $tables = [
            [
                'restaurant_id' =>1,
                'name' => 'Table 1',
                'capacity' => 4,
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Table 2',
                'capacity' => 6,
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Table 3',
                'capacity' => 8,
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Table 4',
                'capacity' => 10,
            ],
            [
                'restaurant_id' => 2,
                'name' => 'Table 1',
                'capacity' => 2,
            ],
            [
                'restaurant_id' => 2,
                'name' => 'Table 2',
                'capacity' => 4,
            ],
            [
                'restaurant_id' => 2,
                'name' => 'Table 3',
                'capacity' => 6,
            ],
            [
                'restaurant_id' => 2,
                'name' => 'Table 4',
                'capacity' => 8,
            ],
            [
                'restaurant_id' => 4,
                'name' => 'Table 1',
                'capacity' => 8,
            ],
            // Add more table data as needed
        ];

        // Insert the tables into the 'tables' table
        Table::insert($tables);
    }
}

