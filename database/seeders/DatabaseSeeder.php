<?php

namespace Database\Seeders;

use App\Models\Product;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'marcelok1985@gmail.com',
        ]);

        Product::create([
            'name' => 'Product 1',
            'price' => 1000,
        ]);

        Product::create([
            'name' => 'Product 2',
            'price' => 2000,
        ]);
    }
}
