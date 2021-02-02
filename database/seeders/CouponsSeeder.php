<?php

namespace Database\Seeders;

use App\Models\Coupon;
use Illuminate\Database\Seeder;

class CouponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'number' => 1000000,
            'value' => 10,
            'operation' => '2021-02-28',
            'active' => true,
            'company_id' => 1,
        ]);
    }
}
