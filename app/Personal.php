<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = 'personal';

    protected $fillable = ['nombre','dni','lugar','apellido'];

    public function documentos(){
        return $this->hasMany(RRHHDocumento::class);
    }
}
