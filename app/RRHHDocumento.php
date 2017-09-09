<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RRHHDocumento extends Model
{
    protected $table = 'rrhh_documento';

    protected $fillable = ['personal_id','user_id','detalle','store_id','seccion_id','archivo'];

    public function personal(){
        return $this->belongsTo(Personal::class);
    }

    public function seccion(){
        return $this->belongsTo(Seccion::class);
    }

}
