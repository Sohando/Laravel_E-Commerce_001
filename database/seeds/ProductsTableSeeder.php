<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Product::class, 20)->create();
        $products = App\Models\Product::select('id')->get();
        foreach ($products as $product) {
            $product->addMediaFromUrl(Faker\Provider\Image::imageUrl())->toMediaCollection('products');
        }
    }
}
