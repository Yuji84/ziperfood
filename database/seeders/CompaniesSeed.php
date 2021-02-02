<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompaniesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'Ziper',
            'street' => 'Rua Antônio Festa',
            'number' => '119',
            'complement' => null,
            'cep' => '06296060',
            'neighborhood' => 'Remédios',
            'city' => 'Osasco',
            'state' => 'SP',
            'phone' => '11999859047',
            'email' => 'eymath@hotmail.com',
        ]);
    }
}
