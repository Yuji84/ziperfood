<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    private $tags=['queijo', 'calabresa', 'frango','presunto', 'peixe', 'vegetariano'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->tags as $t){
            Tag::create([
                'name' => $t,
                'company_id' => 1
            ]);
        }
    }
}
