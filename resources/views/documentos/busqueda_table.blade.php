@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">Digitalización</div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body">
                    {!! Form::open(array('url' => 'documentos/busqueda','method' => 'get')) !!}
                    {!! Form::hidden('ctrl', 'ctrl') !!}
                    <div class="form-body">

                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-heading">Formulario De Busqueda
                                    <div class="panel-action">
                                        @if(null !== Request::input('ctrl'))
                                        <a href="#" data-perform="panel-collapse"><i class="ti-plus"></i></a>                                        
                                        @else
                                        <a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> 
                                        @endif
                                    </div>
                                </div>
                                @if(null !== Request::input('ctrl'))
                                <div class="panel-wrapper collapse">
                                    @else
                                    <div class="panel-wrapper collapse in">
                                        @endif
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Número </label>
                                                        <input type="text" name="numero" id="numero" class="col-md-3 form-control" value="{{Request::input('numero')}}" >
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Tipo</label>
                                                        {!! Form::select('tipo_id', $tipos ,  Request::input('tipo_id'), ['class' => 'form-control'])!!}
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Oficina</label>
                                                        {!! Form::select('oficina_id', $oficinas ,  Request::input('oficina_id'), ['class' => 'form-control col-sm-4'])!!}
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Fecha Inicio</label>
                                                        <div class="input-group">
                                                            <input type="text" name="fecha_doc_ini" class="form-control mydatepicker" placeholder="dd/mm/yyyy" value="{{Request::input('fecha_doc_ini')}}" > <span class="input-group-addon"><i class="icon-calender"></i></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Fecha Fin</label>
                                                        <div class="input-group">
                                                            <input type="text" name="fecha_doc_fin" class="form-control mydatepicker" placeholder="dd/mm/yyyy" value="{{Request::input('fecha_doc_fin')}}"> <span class="input-group-addon"><i class="icon-calender"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="control-label">Observaciones</label>
                                                    <div>
                                                        <textarea class="form-control" id='observaciones' name="observaciones" rows="5">{{Request::input('observaciones')}}</textarea>
                                                    </div>
                                                </div>

                                            </div>
                                            <br>

                                            <?php
                                            $array = array();
                                            for ($i = 5; $i <= 200; $i+=5) {
                                                $array[$i] = $i;
                                            }
                                            ?>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <!--<label class="control-label">Buscar </label>-->
                                                        <button type="submit" id='boton' name='boton' class="btn btn-success"> <i class="fa fa-check"></i> Buscar</button>
                                                        <a href="{{url('/documentos/busqueda')}}" style="color:#ffffff;" class="btn btn-info"> <i class="fa fa-check"></i>Limpiar</a>
                                                    </div>                                
                                                </div>
                                            </div>


                                            @if($documentos)
                                            <?php
                                            $ordenPorOpciones = array(
                                                "numero" => "Número",
                                                "tipo_id" => "Tipo",
                                                "oficina_id" => "Oficina",
                                                "fecha_doc_ini" => "Fecha Inicio",
                                                "fecha_doc_fin" => "Fecha Fin",
                                            );
                                            $ascDesc = array(
                                                "asc" => "Ascendente",
                                                "desc" => "Descendente",
                                            );
                                            ?>
                                            <div class="row">
                                                <!--/span-->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Resultados Por Pagina</label>
                                                        {{ Form::select('cantidadxpagina', $array,$cantidadxpagina) }}
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <!--/span-->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="control-label">Ordenar por </label>
                                                        {{ Form::select('ordenPor', $ordenPorOpciones,Request::input('ordenPor')) }}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Orden </label>
                                                        {{ Form::select('orden', $ascDesc,Request::input('orden')) }}
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            {{ Form::close() }}
                                            <div class="panel-footer"> &nbsp; </div>
                                        </div>
                                    </div>
                                </div>

                                <h3>Cantidad de Resultados: {{$documentos->total()}}</h3>
                                <div style="text-align:center;">                        
                                    {{ $documentos->appends(Request::all())->links() }}
                                </div>
                                <table class="table" id="datos">
                                    <thead>
                                        <tr>
                                            <th>Número</th>
                                            <th>Tipo</th>
                                            <th>Oficina</th>
                                            <th>Fecha</th>
                                            <th>Observaciones</th>
                                            <th>Archivo</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                
                                        @foreach ($documentos as $doc)
                                        <tr>
                                            <td>{{$doc->numero}}</td>
                                            <td>{{getNomTipo($doc->tipo_id)}}</td>
                                            <td>{{getNomOfi($doc->oficina_id)}}</td>
                                            <td>{{fechaAmdInv($doc->fecha_doc)}}</td>
                                            <td>{{$doc->observaciones}}</td>
                                            <td>
                                                @foreach(getArchivo($doc->id) as $row)
                                                <a title="Visualizar" href="{{ asset('documentos/'.$row->nombre ) }}" target="_blank">{{ $row->nombre }}</a>
                                                @endforeach
                                            </td>
                                        </tr>                                
                                        @endforeach
                                    </tbody>
                                </table>                     
                                <div style="text-align:center;">                        
                                    {{ $documentos->appends(Request::all())->links() }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @endsection
            @section('scripts.footer')
            <link href="{{ url('plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')  }}" rel="stylesheet" />
            <script src="{{ url('plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>

            <script>
jQuery('.mydatepicker, #datepicker').datepicker({
    format: 'dd/mm/yyyy'
}
);
            </script>


            <style type = "text/css" >
                .dataTables_filter {
                    float: right;
                }
            </style>
            <script type="text/javascript" language="javascript" src="{{asset('js/DataTables/media/js/jquery.dataTables.js')}}"></script>
            <script type="text/javascript" language="javascript" src="{{asset('js/DataTables/media/js/dataTables.bootstrap.js')}}"></script>
            <script>
$(document).ready(function () {
    $('#datos').DataTable({
        "paging": false,
        "ordering": false,
        "info": false,
        "oLanguage": {
            "sSearch": "Filtro: "
        }
    });
});

            </script>
            @endsection


