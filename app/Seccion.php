<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    protected $table = 'secciones';

    protected $fillable = ['nombre'];

    public function documentos(){
        return $this->hasMany(RRHHDocumento::class);
    }
}
