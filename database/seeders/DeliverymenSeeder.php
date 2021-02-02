<?php

namespace Database\Seeders;

use App\Models\Deliveryman;
use Illuminate\Database\Seeder;

class DeliverymenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Deliveryman::create([
            'name' => 'João',
            'celphone' => '911111111',
            'company_id' => 1
        ]);
        Deliveryman::create([
            'name' => 'José',
            'celphone' => '911111112',
            'company_id' => 1
        ]);
    }
}
