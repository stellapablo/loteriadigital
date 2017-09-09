<?php

function currentUser()
{
    return auth()->user();
}


function getName($id){

    $persona = \App\RRHHDocumento::find($id)->personal;


    return ($persona->nombre . ", " . $persona->apellido);

}

function getSeccion($id){

    return  \App\Seccion::find($id)->nombre;

}