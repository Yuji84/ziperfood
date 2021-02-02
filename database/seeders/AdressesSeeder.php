<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;

class AdressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'customer_id' => 1,
            'street' => 'Rua Agamenom Magalhães',
            'number' => '299',
            'complement' => null,
            'cep' => '05105090',
            'neighborhood' => 'Vila dos Remédios',
            'city' => 'São Paulo',
            'state' => 'SP',
            'latitude' => -23.5122047,
            'longitude' => -46.7590873
        ]);

        Address::create([
            'customer_id' => 1,
            'street' => 'Antônio Ayrosa',
            'number' => '100',
            'complement' => null,
            'cep' => '05103000',
            'neighborhood' => 'Vila dos Remédios',
            'city' => 'São Paulo',
            'state' => 'SP',
            'latitude' => -23.5160344,
            'longitude' => -46.7555231
        ]);
    }
}
