<?php

namespace Database\Seeders;

use App\Models\ExtraIngredient;
use Illuminate\Database\Seeder;

class ExtrasIngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExtraIngredient::create([
            'extra_id' => 1,
            'ingredient_id' => 1
        ]);
        ExtraIngredient::create([
            'extra_id' => 1,
            'ingredient_id' => 5
        ]);
    }
}
