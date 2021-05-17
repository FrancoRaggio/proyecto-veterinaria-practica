<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mascota;

class MascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mascota::create([
            'nombre'=> 'Tony',
            'especie'=> 'Caniche',
            'raza'=> 'Caniche',
            'sexo'=> 'Macho',
            'propietario' => 'Franco Raggio',
            'fechaNacimiento' => '2015-12-12',
            'direccion'=> '140 numero 1515',
            'telefono' => '2210000000'
        ]);
    }
}
