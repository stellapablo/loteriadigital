<?php

namespace App;

use App\Events\UbicacionWasCreated;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table = 'ubicaciones';

    protected $fillable = ['nombre','direccion'];

    //protected $events = [
    //    'created' => UbicacionWasCreated::class
    //];
}
