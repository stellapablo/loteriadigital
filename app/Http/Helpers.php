<?php

namespace App\Http\Helpers;

use App\RRHHDocumento;


function getName($id){

    $persona = RRHHDocumento::find($id)->persona;

    return $persona->nombre . "" - $persona->apellido;

}