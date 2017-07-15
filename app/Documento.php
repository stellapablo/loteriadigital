<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class Documento extends Model
{
    protected $table = 'documentos';

    protected $fillable = ['hash','tomo','tipo_documento','nro_documento','fecha_documento','detalle','archivo','store_id','tag_id','user_id'];


    public static function fromForm(UploadedFile $file){

        $archivo = new static;
        $name = time(). '_'. $file->getClientOriginalName();
        $file->move($archivo->baseDir, $name);

        $id = SADocumento::all()->last()->id;
        $id = $id + 1;

        //Archivo::create(['nombre' => $name , 'documento_id' => $id ]);

        return $name;
    }

    public static function fromFromSA(UploadedFile $file,$id){

        $archivo = new static;
        $name = time(). '_'. $file->getClientOriginalName();
        $file->move($archivo->baseDir, $name);

        $doc = SADocumento::find($id);
        $doc->archivo = $name;
        $doc->save();

        return $name;
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    protected $events = [
        //'created' => SADWasCreated::class
    ];

    /* busqueda */

    public function scopeWhereLikeNroDocumento($query, $numero) {
        if (trim($numero) != '') {
            $query->where('numero_documento', 'LIKE', '%' . $numero . '%');
        }
    }

    public function scopeWhereTipoDocumento($query, $tipo) {
        if (trim($tipo != '')) {
            $query->where('tipo_documento', 'LIKE', '%' . $tipo . '%');
        }
    }

    public function scopeWhereTomo($query, $tomo) {
        if (trim($tomo != '')) {
            $query->where('tomo', $tomo);
        }
    }

    public function scopeWhereLikeDetalle($query, $detalle) {
        if (trim($detalle) != '') {
            $query->where('detalle', 'LIKE', '%' . $detalle . '%');
        }
    }

    public function scopeMayorFecha($query, $fecha) {
        if (trim($fecha != '')) {
            $query->where('fecha_documento', '>', $fecha);
        }
    }

    public function scopeMenorFecha($query, $fecha) {
        if (trim($fecha != '')) {
            $query->where('fecha_documento', '<', $fecha);
        }
    }

    public function scopeOrderByCampoTipo($query, $campo, $tipo) {
        if (trim($campo != '')) {
            $query->orderBy($campo, $tipo);
        }
    }

}
