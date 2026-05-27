<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $primaryKey = 'id_equipo';

    protected $fillable = ['tipo_equipo', 'num_serie', 'marca', 'modelo', 'caracteristicas', 'estado', 'ubicacion_id'];

    public function ubicacion(){
        return $this->belongsTo(Ubicacion::class, 'ubicacion_id', 'id_ubicacion');
    }

    public function mantenimientos(){
        return $this->hasMany(Mantenimiento::class, 'id_equipo', 'id_equipo');
    }
}
