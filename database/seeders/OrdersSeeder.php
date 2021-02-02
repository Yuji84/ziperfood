<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'accept' => '2021-01-31 22:07:13',
            'dispatched' => '2021-01-31 22:37:13',
            'coupon_id' => 1,
            'delivery' => true,
            'delivery_tax' => 5,
            'deliveryman_id' => 1,
            'payment_method' => 'debit',
            'customer_id' => 1,
            'address_id' => 1,
            'paid' => false,
        ]);
    }
}
