<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $table = 'mascota';

    public $fillable = ['nombre','especie','raza','sexo','propietario','fechaNacimiento','direccion','telefono'];
    public $timestamps = false;
}

