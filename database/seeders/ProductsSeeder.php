<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Jacket',
            'description' => 'Given Jacket Description',
            'currency' => 'PHP',
            'price' => 1234.56,
            'brand' => 'KuyaWill',
            'category' => 'apparel',
            'image' => 'https://netstorage-kami.akamaized.net/images/0fgjhs1shmj74jpi4g.jpg?&imwidth=1200',
        ]);

        DB::table('products')->insert([
            'title' => 'It Starts with Us Novel',
            'description' => 'New York Times bestseller book',
            'currency' => 'PHP',
            'price' => 1550.50,
            'brand' => 'Romance, Grand Central Publishing and Atria Books',
            'category' => 'book',
            'image' => 'https://netstorage-kami.akamaized.net/images/0fgjhs1shmj74jpi4g.jpg?&imwidth=1200',
        ]);

        DB::table('products')->insert([
            'title' => '2021 Apple 11 inch iPad Pro',
            'description' => 'Apple high-end tablet computer',
            'currency' => 'PHP',
            'price' => 65990.50,
            'brand' => 'Apple',
            'category' => 'electronic device',
            'image' => 'https://netstorage-kami.akamaized.net/images/0fgjhs1shmj74jpi4g.jpg?&imwidth=1200',
        ]);
    }
}
