<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Pizza de mussarela',
            'price' => 51,
            'size' => 'Grande - 8 pedaços',
            'category_id' => 1,
            'company_id' => 1
        ]);
        Product::create([
            'name' => 'Pizza de mussarela',
            'price' => 61,
            'size' => 'Gigante - 10 pedaços',
            'category_id' => 1,
            'company_id' => 1
        ]);
        Product::create([
            'name' => 'Pizza de mussarela',
            'price' => 31,
            'size' => 'Brotinho - 4 pedaços',
            'category_id' => 1,
            'company_id' => 1
        ]);
    }
}
