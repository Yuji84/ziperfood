<?php

namespace Database\Seeders;

use App\Models\ProductTag;
use Illuminate\Database\Seeder;

class ProductTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductTag::create([
            'product_id' => 1,
            'tag_id' => 1,
        ]);
        ProductTag::create([
            'product_id' => 2,
            'tag_id' => 1,
        ]);
        ProductTag::create([
            'product_id' => 3,
            'tag_id' => 1,
        ]);
        ProductTag::create([
            'product_id' => 1,
            'tag_id' => 6,
        ]);
        ProductTag::create([
            'product_id' => 2,
            'tag_id' => 6,
        ]);
        ProductTag::create([
            'product_id' => 3,
            'tag_id' => 6,
        ]);
    }
}
