<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop',
            'description' => 'High performance laptop for professionals',
            'price' => 999.99,
            'stock' => 50,
        ]);

        Product::create([
            'name' => 'Smartphone',
            'description' => 'Latest smartphone with advanced features',
            'price' => 699.99,
            'stock' => 100,
        ]);

        Product::create([
            'name' => 'Headphones',
            'description' => 'Wireless noise-cancelling headphones',
            'price' => 199.99,
            'stock' => 200,
        ]);

        Product::create([
            'name' => 'Tablet',
            'description' => 'Lightweight tablet for everyday use',
            'price' => 449.99,
            'stock' => 75,
        ]);

        Product::create([
            'name' => 'Smart Watch',
            'description' => 'Fitness tracking smartwatch',
            'price' => 299.99,
            'stock' => 150,
        ]);
    }
}
