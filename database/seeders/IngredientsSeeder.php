<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class IngredientsSeeder extends Seeder
{
    private $ingredients=['mussarela', 'tomate', 'molho','oregano'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->ingredients as $i){
            Ingredient::create([
                'name' => $i,
                'company_id' => 1
            ]);
        }
    }
}
