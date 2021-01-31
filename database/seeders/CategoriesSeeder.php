<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{

    private $categories=['pizza', 'esfiha', 'bebida','salgados'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->categories as $c){
            Category::create([
                'name' => $c,
                'company_id' => 1
                ]);
        }
    }
}
