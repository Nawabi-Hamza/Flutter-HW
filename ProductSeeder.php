<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('product')->insert([
            [
                'name' => 'Laptop',
                'price' => 1200,
                'description' => 'High performance laptop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mobile Phone',
                'price' => 800,
                'description' => 'Latest smartphone model',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Headphones',
                'price' => 150,
                'description' => 'Noise cancelling headphones',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
