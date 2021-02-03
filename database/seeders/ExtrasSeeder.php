<?php

namespace Database\Seeders;

use App\Models\Extra;
use Illuminate\Database\Seeder;

class ExtrasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Extra::create([
            'name' => 'mussarela',
            'price' => 10,
        ]);
        Extra::create([
            'name' => 'catupiry',
            'price' => 10,
        ]);
    }
}
