<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Customer User',
            'email' => 'customer@example.com',
            'password' => bcrypt('password'),
            'role' => 'customer',
            'phone' => '03001234567',
            'address' => '123 Main Street, Lahore',
        ]);

        $categories = [
            ['name' => 'Electronics', 'slug' => 'electronics', 'description' => 'Electronic gadgets and devices'],
            ['name' => 'Clothing', 'slug' => 'clothing', 'description' => 'Fashion and apparel'],
            ['name' => 'Home & Kitchen', 'slug' => 'home-kitchen', 'description' => 'Home appliances and kitchen essentials'],
            ['name' => 'Books', 'slug' => 'books', 'description' => 'Books and stationery'],
            ['name' => 'Sports', 'slug' => 'sports', 'description' => 'Sports equipment and accessories'],
        ];

        foreach ($categories as $cat) {
            Category::create($cat);
        }

        $products = [
            ['name' => 'Wireless Headphones', 'slug' => 'wireless-headphones', 'price' => 2999, 'compare_price' => 3999, 'stock_quantity' => 50, 'sku' => 'WH-001', 'category_id' => 1, 'is_featured' => true, 'description' => 'High-quality wireless headphones with noise cancellation.'],
            ['name' => 'Smart Watch', 'slug' => 'smart-watch', 'price' => 5499, 'compare_price' => 6999, 'stock_quantity' => 30, 'sku' => 'SW-002', 'category_id' => 1, 'is_featured' => true, 'description' => 'Smart watch with health tracking and notifications.'],
            ['name' => 'USB-C Hub', 'slug' => 'usb-c-hub', 'price' => 1499, 'compare_price' => null, 'stock_quantity' => 100, 'sku' => 'UC-003', 'category_id' => 1, 'is_featured' => false, 'description' => '7-in-1 USB-C hub with HDMI, USB 3.0, SD card reader.'],
            ['name' => 'Cotton T-Shirt', 'slug' => 'cotton-t-shirt', 'price' => 899, 'compare_price' => 1299, 'stock_quantity' => 200, 'sku' => 'CT-001', 'category_id' => 2, 'is_featured' => true, 'description' => 'Premium quality cotton t-shirt available in multiple colors.'],
            ['name' => 'Denim Jacket', 'slug' => 'denim-jacket', 'price' => 2499, 'compare_price' => 3499, 'stock_quantity' => 40, 'sku' => 'DJ-002', 'category_id' => 2, 'is_featured' => false, 'description' => 'Classic denim jacket with a modern fit.'],
            ['name' => 'Running Shoes', 'slug' => 'running-shoes', 'price' => 3999, 'compare_price' => 4999, 'stock_quantity' => 60, 'sku' => 'RS-003', 'category_id' => 2, 'is_featured' => true, 'description' => 'Lightweight running shoes with excellent cushioning.'],
            ['name' => 'Blender', 'slug' => 'blender', 'price' => 1999, 'compare_price' => 2499, 'stock_quantity' => 35, 'sku' => 'BL-001', 'category_id' => 3, 'is_featured' => false, 'description' => 'Powerful blender for smoothies and shakes.'],
            ['name' => 'Coffee Maker', 'slug' => 'coffee-maker', 'price' => 4499, 'compare_price' => 5999, 'stock_quantity' => 20, 'sku' => 'CM-002', 'category_id' => 3, 'is_featured' => true, 'description' => 'Automatic drip coffee maker with programmable timer.'],
            ['name' => 'The Art of Programming', 'slug' => 'art-of-programming', 'price' => 1299, 'compare_price' => null, 'stock_quantity' => 80, 'sku' => 'BK-001', 'category_id' => 4, 'is_featured' => false, 'description' => 'Comprehensive guide to software development.'],
            ['name' => 'Yoga Mat', 'slug' => 'yoga-mat', 'price' => 1499, 'compare_price' => 1799, 'stock_quantity' => 90, 'sku' => 'SP-001', 'category_id' => 5, 'is_featured' => false, 'description' => 'Non-slip yoga mat with carrying strap.'],
        ];

        foreach ($products as $prod) {
            Product::create($prod);
        }
    }
}
