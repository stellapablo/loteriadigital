<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class SADocumento extends Model
{
    protected $baseDir = 'documentos';

    protected $table = 'sec_admin_documentos';

    protected $fillable = ['tags','tomo','tipo_documento','nro_documento','fecha_documento','detalle','archivo','store_id','tag_id','user_id'];


    public function tags() {
        return $this->hasMany('App\Tag','sad_id');
    }

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


}
