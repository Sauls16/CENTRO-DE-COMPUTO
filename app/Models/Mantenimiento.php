<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    protected $primaryKey = 'id_mantenimiento';

    protected $fillable = ['id_equipo', 'tipo_mantenimiento','descripcion_falla','acciones_realizadas','fecha_mantenimiento'];

    public function equipo(){
        return $this->belongsTo(Equipo::class, 'id_equipo', 'id_equipo');
    }
}
