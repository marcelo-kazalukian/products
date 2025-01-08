<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
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
            'email' => 'm@m.com',
        ]);

        Category::create([
            'name' => 'Computers',
        ]);

        Category::create([
            'name' => 'Books',
        ]);

        Category::create([
            'name' => 'Food',
        ]);

        Product::create([
            'name' => 'IBM PS/1',
            'price' => 1000,
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Atomic Habits',
            'price' => 2000,
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Pizza',
            'price' => 3000,
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Macbook Pro',
            'price' => 4000,
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'The Lean Startup',
            'price' => 5000,
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Hamburger',
            'price' => 6000,
            'category_id' => 3,
        ]);

        Tag::create([
            'name' => 'On Sale',
        ]);

        Tag::create([
            'name' => 'New Edition',
        ]);

        Tag::create([
            'name' => 'trending',
        ]);
    }
}
