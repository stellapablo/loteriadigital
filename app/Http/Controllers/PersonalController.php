<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalEditFormRequest;
use App\Http\Requests\PersonalFormRequest;
use App\Personal;
use Hamcrest\Core\IsTypeOf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonalController extends Controller
{
    public function index(){

        $personas = Personal::orderBy('id','DESC')->get();

        return view('personal.index',compact('personas'));

    }

    public function create(){

        return view('personal.create');
    }

    public function store(PersonalFormRequest $request){

        Personal::create($request->all());

        flash()->success('Nuevo personal!');

        return back();

    }

    public function edit(Personal $personal)
    {
        return view('personal.edit',compact('personal'));
    }

    public function update(PersonalEditFormRequest $request, $id){


        Personal::where('id',$id)->update(['nombre'=>$request->nombre,
                                           'apellido'=>$request->apellido,
                                           'dni'=>$request->dni,
                                           'lugar'=>$request->lugar,
                                        ]);

        flash()->success('Personal actualizado!');

        return back();
    }

    public function registrar(){

        $roles = [''=>'','1' => 'Administrador','2'=>'Consultas','3'=>'Carga'];

        return view('auth.register',compact('roles'));
    }

    public function autocompletar(Request $request) {


        $data = $request->term;
        $personal = DB::table('personal')->where('apellido', 'LIKE', '%' . trim($data) . '%')
            ->select('id','nombre','apellido')
            ->get();

        $row_array = array();

        foreach ($personal as $row) {
                array_push($row_array, array(
                        "id" => $row->id,
                        "value" => $row->apellido . " " . $row->nombre
                    )
                );
        }


        echo json_encode($row_array);
    }



}
