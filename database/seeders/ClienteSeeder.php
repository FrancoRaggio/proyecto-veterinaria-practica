<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;
class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'nombre'=> 'franco raggio',
            'direccion'=> '140 numero 1515',
            'telefono' => '2210000000'
        ]);
    }
}
