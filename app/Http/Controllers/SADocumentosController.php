<?php

namespace App\Http\Controllers;

use App\SADocumento;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SADocumentosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $sadocumento = SADocumento::all();

        return view('sadocumentos.index',compact('sadocumento'));
    }

    public function create(){

        $ubicaciones = ['1'=>'Deposito 1','2'=>'Deposito 3'];

        return view('sadocumentos.create',compact('ubicaciones'));
    }

    public function store(Request $request){

        $this->validate($request, [
            'nro_documento' => 'required',
            'tomo' => 'required',
            'fecha_documento' => 'required|date',
            'tipo_documento' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'store_id' => 'required',
            'file' => 'required|mimes:pdf'
        ]);

        $file = $this->storeFile($request);

        $doc = SADocumento::create([
            'nro_documento' => $request->nro_documento,
            'tomo' => $request->tomo,
            'fecha_documento' => $request->fecha_documento,
            'tipo_documento' => $request->tipo_documento,
            'store_id' => $request->store_id,
            'user_id' => auth()->user()->id,
            'detalle' => $request->detalle,
            'tags' => $request->tags,
            'archivo' => $file
        ]);

        $this->addTags($request->tags);

        flash()->success('Documento digitalizado con exito!');

        return back();


    }

    public function addDocument(Request $request) {

        $this->validate($request, [
            'file' => 'required|mimes:pdf'
        ]);

       $archivo = SADocumento::fromForm($request->file('file'));

        echo $archivo;
    }

    public function edit($id){

        $sad = SADocumento::find($id);

        $this->authorize('update', $sad);

        $ubicaciones = ['1'=>'Deposito 1','2'=>'Deposito 3'];

        $tags = SADocumento::find($id)->tags;

        return view('sadocumentos.edit',compact('sad','ubicaciones','tags'));
    }

    public function addTags($request){

        $tags = explode(',',$request);

        Tag::add($tags);
    }

    public function storeFile(Request $request)
    {

        $file = $request->file('file');
        $ext = $file->guessClientExtension();

        $file->storeAs($request->tomo, "$request->tomo"."_"."$request->nro_documento.{$ext}", 'digitalizados');

        $this->addTags($request->tags);

        return $request->tomo ."_". $request->nro_documento.".". $ext;
    }

    public function update(Request $request, $id){

        $this->validate($request, [
            'nro_documento' => 'required',
            'tomo' => 'required',
            'fecha_documento' => 'required|date',
            'tipo_documento' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'store_id' => 'required',
        ]);

        if(isset($request->file)){
            $file = $this->storeFile($request);
        }else{
            $sad = SADocumento::find($id);
            $file = $sad->archivo;
        }

        $doc = SADocumento::where('id',$id)->update([
                                            'nro_documento' => $request->nro_documento,
                                            'tomo' => $request->tomo,
                                            'fecha_documento' => $request->fecha_documento,
                                            'tipo_documento' => $request->tipo_documento,
                                            'store_id' => $request->store_id,
                                            'detalle' => $request->detalle,
                                            'tags' => $request->tags,
                                            'archivo' => $file,
                                            ]);

        flash()->success('Actualización completa!');

        return back();

    }

}
