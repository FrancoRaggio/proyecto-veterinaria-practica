<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;
use Illuminate\Support\Facades\Validator;

class MascotaController extends Controller
{
    public function all() {

        $mascota = Mascota::all();
        
        return response()->json($mascota,200);
    }
    public function create(Request $request) {
        $validator=Validator::make($request->all(),[
                'nombre'=>'required',
                'especie'=> 'required',
                'raza'=> 'required',
                'sexo'=> 'required',
                'propietario' => 'required',
                'fechaNacimiento' => 'required',
                'direccion'=> 'required',
                'telefono' => 'required|numeric'
        ]);
        
        if ($validator->fails()){
            return response()->json([
                'message'=> 'Error en los datos ingresados'
            ],422);
        }

        Mascota::create([
            'nombre'=>$request['nombre'] ,
            'especie'=> $request['especie'],
            'raza'=>$request['raza'] ,
            'sexo'=> $request['sexo'],
            'propietario' => $request['propietario'],
            'fechaNacimiento' => $request['fechaNacimiento'],
            'direccion'=> $request['direccion'],
            'telefono' => $request['telefono']
        ]);

        return response()->json([
            'message'=> 'Mascosta Creada exitosamente'
        ],201);

    }
}
