<?php

use Illuminate\Database\Seeder;
use App\Models\ProductImage;
use App\Models\Product;

class ProductImageSeeder extends Seeder
{
    public function run(): void
    {
        $product = Product::where('slug', 'dior-sauvage')->first();

        if ($product) {
            ProductImage::create([
                'product_id' => $product->id,
                'path' => '/images/sauvage.jpg',
                'alt' => 'عطر Dior Sauvage',
                'is_primary' => true,
            ]);

            ProductImage::create([
                'product_id' => $product->id,
                'path' => '/images/sauvage_back.jpg',
                'alt' => 'جعبه Dior Sauvage',
                'is_primary' => false,
            ]);
        }
    }
}
