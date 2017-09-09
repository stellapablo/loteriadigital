<?php

namespace App\Http\Controllers;

use App\Documento;
use App\Http\Requests\SADocumentoEditFormRequest;
use App\Http\Requests\SADocumentoFormRequest;
use App\Tag;
use App\TipoDocumento;
use App\Ubicacion;
use Barryvdh\DomPDF\PDF;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class DocumentosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $sadocumento = Documento::latest()->get();

        return view('sadocumentos.index',compact('sadocumento'));
    }

    public function create(){

        $tipos = ['' => ''] + TipoDocumento::pluck('nombre', 'id')->all();

        $ubicaciones = ['' => ''] + Ubicacion::pluck('nombre', 'id')->all();


        return view('sadocumentos.create',compact('ubicaciones','tipos'));
    }

    public function store(SADocumentoFormRequest $request){

        $file = $this->storeFile($request);

        $doc = Documento::create([
            'nro_documento' => $request->nro_documento,
            'tomo' => $request->tomo,
            'fecha_documento' => $request->fecha_documento,
            'tipo_documento' => $request->tipo_documento,
            'store_id' => $request->store_id,
            'user_id' => auth()->user()->id,
            'detalle' => $request->detalle,
            'hash' => $request->tags,
            'archivo' => $file
        ]);

        $this->addTags($request->tags,$doc->id);

        flash()->success('Documento digitalizado con exito!');

        return back();


    }

    public function addDocument(Request $request) {

        $this->validate($request, [
            'file' => 'required|mimes:pdf'
        ]);

        $archivo = Documento::fromForm($request->file('file'));

        echo $archivo;
    }

    public function edit($id){

        $sad = Documento::find($id);

        $this->authorize('update', $sad);

        $ubicaciones = ['' => ''] + Ubicacion::pluck('nombre', 'id')->all();

        $tipos = ['' => ''] + TipoDocumento::pluck('nombre', 'id')->all();


        $tags = Documento::find($id)->tags;

        return view('sadocumentos.edit',compact('sad','ubicaciones','tags','tipos'));
    }

    public function addTags($request,$doc){

        $tags = explode(',',$request);

        Tag::add($tags,$doc);
    }

    public function storeFile(Request $request)
    {

        $file = $request->file('file');
        $ext = $file->guessClientExtension();

        $file->storeAs($request->tomo, "$request->tomo"."_"."$request->nro_documento.{$ext}", 'digitalizados');

        return $request->tomo ."_". $request->nro_documento.".". $ext;
    }

    public function update(SADocumentoEditFormRequest $request, $id){

        if(isset($request->file)){
            $file = $this->storeFile($request);
        }else{
            $sad = Documento::find($id);
            $file = $sad->archivo;
        }

        $doc = Documento::where('id',$id)->update([
            'nro_documento' => $request->nro_documento,
            'tomo' => $request->tomo,
            'fecha_documento' => $request->fecha_documento,
            'tipo_documento' => $request->tipo_documento,
            'store_id' => $request->store_id,
            'detalle' => $request->detalle,
            'hash' => $request->tags,
            'archivo' => $file,
        ]);

        $this->addTags($request->tags,$id);

        flash()->success('Actualización completa!');

        return back();

    }

    //busqueda
    public function find(Request $request) {

        $ubicaciones = ['' => ''] + Ubicacion::pluck('nombre', 'id')->all();

        $tipos = ['' => ''] + TipoDocumento::pluck('nombre', 'id')->all();

        $numero = '';
        $ubicacion_id = '';
        $tomo = '';

        if ((null !== $request->cantidadxpagina)) {
            $cantidadxpagina = $request->cantidadxpagina;
        } else {
            $cantidadxpagina = 5;
        }

        $documentos = [];

        if ($request->ctrl) {

            $documentos = Documento::where('nro_documento', 'LIKE', '%' . $request->nro_documento . '%')
                ->WhereTipoDocumento($request->tipo_documento)
                ->WhereTomo($request->tomo)
                ->WhereLikeDetalle($request->detalle)
                ->MayorFecha($request->fecha_doc_ini)
                ->MenorFecha($request->fecha_doc_fin)
                ->OrderByCampoTipo($request->ordenPor,$request->orden)
                ->paginate($cantidadxpagina);

        }

        //desc ordenPor orden
        return view('sadocumentos.find', compact('tipos','cantidadxpagina', 'ubicaciones', 'parametros', 'documentos', 'numero', 'cantReg'));
    }

    public function indice(){

        $tomos = Documento::distinct()->select('id','tomo')->orderBy('tomo','ASC')->pluck('tomo','tomo')->all();

        return view('sadocumentos.indice',compact('tomos'));
    }

    public function gerenateIndice(Request $request){

        $tomo = $request->tomo;

        $documentos = Documento::select('id','nro_documento','tipo_documento','detalle','created_at','fecha_documento')
                            ->where('tomo','=',$request->tomo)
                            ->orderBy('created_at','ASC')
                            ->get();

        //return $tomos->toJson();

        $view = \View::make('pdf.indice',compact('documentos','tomo'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        return $pdf->stream('invoice');

    }

    public function findTags($nombre){

        $tag = Tag::where('nombre','=',$nombre)->first();

        return $tag->documentos;

    }

    public function show(Documento $documento){


        dd($documento);
    }
}
