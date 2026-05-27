<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table = 'ubicaciones';

    protected $primaryKey = 'id_ubicacion';    

    protected $fillable = ['nombre_area', 'capacidad'];

    public function equipos(){
        return $this->hasMany(Equipo::class, 'ubicacion_id', 'id_ubicacion');
    }
}
