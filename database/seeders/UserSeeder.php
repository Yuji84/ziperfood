<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Vanessa',
            'celphone' => '11995253488',
            'email' => null,
            'access' => 'customer',
            'password' =>'12345678',
            'company_id' => 1
        ]);
        User::create([
            'name' => 'controller',
            'celphone' => '11999859047',
            'email' => 'eymath@hotmail.com',
            'access' => 'controller',
            'password' =>'12345678',
            'company_id' => 1
        ]);
    }
}
