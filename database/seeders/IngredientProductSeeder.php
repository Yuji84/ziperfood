<?php

namespace Database\Seeders;

use App\Models\IngredientProduct;
use Illuminate\Database\Seeder;

class IngredientProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {     
        for ($p = 1; $p<=3;$p++){
            for($i = 1; $i <=4; $i++){
                IngredientProduct::create([
                    'product_id' => $p,
                    'ingredient_id' => $i
                    ]);
            }
        }
    }
}
