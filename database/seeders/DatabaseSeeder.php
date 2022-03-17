<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'iPad Pro 11‑inch',
                'details' => 'Apple M1 chip
                8-core CPU with 4 performance cores and 4 efficiency cores',
                'description' => 'With Apple Trade In, just give us your eligible iPad and get credit for a new one. It’s good for you and the planet.*
    
                ',
                'brand' => 'Apple',
                'price' => 1099,
                'shiping_cost' => 25,
                'image_path' => 'storage/product.png',
            ],
            [
                'name' => 'Samsung Galaxy Tab S7',
                'details' => '128GB 6GB RAM, 256GB 8GB RAM, 512GB 8GB RAM
                ',
                'description' => 'Introducing the first ever 5G-enabled tablet in the US, the Galaxy S7+ and S71. The razor-sharp display, long-lasting battery2 and expandable memory3 are just the beginning. Add the redesigned S pen, which comes included, and the optional keyboard4 and you have got a tablet that lets you play harder and work smarter. ',
                'brand' => 'Samsung',
                'price' => 1199,
                'shiping_cost' => 25,
                'image_path' => 'storage/product2.png'
            ],
        ];
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
