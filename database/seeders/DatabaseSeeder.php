<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompaniesSeed::class);
        $this->call(UserSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(ProductTagSeeder::class);
        $this->call(IngredientsSeeder::class);
        $this->call(IngredientProductSeeder::class);
        $this->call(AdressesSeeder::class);
        $this->call(CouponsSeeder::class);
        $this->call(DeliverymenSeeder::class);
        $this->call(OrdersSeeder::class);
        $this->call(ExtrasSeeder::class);
        $this->call(ExtrasIngredientsSeeder::class);
        
    }
}
