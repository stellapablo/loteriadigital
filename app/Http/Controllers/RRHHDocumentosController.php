<?php

namespace App\Http\Controllers;

use App\Documento;
use App\Personal;
use App\RRHHDocumento;
use App\Seccion;
use App\Ubicacion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RRHHDocumentosController extends Controller
{
    public function index(){

        $documentos = RRHHDocumento::orderBy('id','DESC')->get();

        return view('rrhh_personal.index',compact('documentos'));
    }

    public function create()
    {

        $secciones = ['' => ''] + Seccion::pluck('nombre', 'id')->all();

        $ubicaciones = ['' => ''] + Ubicacion::pluck('nombre', 'id')->all();

        $personal = Personal::selectRaw('id, CONCAT(nombre," ",apellido) as full_name')->pluck('full_name', 'id');

        $message = [];

        return view('rrhh_personal.create', compact('secciones', 'ubicaciones', 'personal','message'));

    }

    public function store(Request $documento)
    {

        $file = $this->storeFile($documento);

        $doc = RRHHDocumento::create([
            'personal_id' => $documento->personal_id,
            'fecha_documento' => $documento->fecha_documento,
            'seccion_id' => $documento->seccion_id,
            'store_id' => $documento->store_id,
            'user_id' => auth()->user()->id,
            'detalle' => $documento->detalle,
            'archivo' => $file
        ]);

        flash()->success('Documento digitalizado con exito!');

        return redirect()->route('rrhh-documento.edit', [$doc->id]);

    }

    public function storeFile(Request $request){

        $file = $request->file('file');
        $ext = $file->guessClientExtension();

        $seccion = Seccion::find($request->seccion_id)->nombre;
        $apellido = Personal::find($request->personal_id)->apellido;

        $dt = Carbon::now();

        $file->storeAs($seccion,$dt->timestamp ."_".$request->seccion_id . $request->personal_id ."_"."$apellido.{$ext}", 'recurso_humano');

        return  $dt->timestamp ."_". $request->seccion_id . $request->personal_id ."_". $apellido.".". $ext;

    }

    public function edit(RRHHDocumento $rrhh_documento)
    {

        $secciones = ['' => ''] + Seccion::pluck('nombre', 'id')->all();

        $ubicaciones = ['' => ''] + Ubicacion::pluck('nombre', 'id')->all();

        $personal = Personal::selectRaw('id, CONCAT(nombre," ",apellido) as full_name')->pluck('full_name', 'id');

        return view('rrhh_personal.edit',compact('rrhh_documento','personal','secciones','ubicaciones'));
    }


    public function update(Request $request, $id)
    {

        $doc = RRHHDocumento::find($id);

        if (isset($request->file)) {

            Storage::disk('recurso_humano')->delete(getSeccion($doc->seccion_id).'/'. $doc->archivo);

            $file = $this->storeFile($request);


        } else {

            $file = $doc->archivo;

            //verifico carpetas de secciones
            if($doc->seccion_id != $request->seccion_id){

                Storage::disk('recurso_humano')->move(getSeccion($doc->seccion_id).'/'.$file,
                                                      getSeccion($request->seccion_id).'/'.$file);
            }
        }


        $doc = RRHHDocumento::where('id', $id)->update([
            'personal_id' => $request->personal_id,
            'seccion_id' => $request->seccion_id,
            'store_id' => $request->store_id,
            'user_id' => auth()->user()->id,
            'detalle' => $request->detalle,
            'archivo' => $file
        ]);


        flash()->success('Actualización completa!');

        return back();
    }

    public function getPersonal(){
        $personal = Personal::join('rrhh_documento')
            ->inner()
            ->select('id','nombre','apellido')->get();

        

    }

    public function getDocumentosByPersonal(Personal $personal){

        $documentos = Personal::find($personal->id)->documentos()->orderBy('id','DESC')->get();

        return view('personal.documentos',compact('documentos','personal'));

    }


}
