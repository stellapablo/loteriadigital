@extends('layouts.master')
<?php
$ordenPorOpciones = array(
    "tipo_documento" => "Tipo",
    "ubicacion_id" => "Ubicacion",
    "fecha_doc_ini" => "Fecha Inicio",
    "fecha_doc_fin" => "Fecha Fin",
);
$ascDesc = array(
    "asc" => "Ascendente",
    "desc" => "Descendente",
);
?>
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">Digitalización</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        {!! Form::open(array('url' => 'sad-documento/busqueda','method' => 'get')) !!}
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
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label">Tipo de documento</label>
                                                                    {!! Form::text('tipo_documento', null, ['class' => 'form-control'])!!}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label">Numero de documento</label>
                                                                    {!! Form::text('nro_documento', null, ['class' => 'form-control'])!!}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label">Tomo</label>
                                                                    {!! Form::text('tomo', null, ['class' => 'form-control'])!!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label">Ubicación</label>
                                                                    {!! Form::select('store_id', $ubicaciones ,  null, ['class' => 'form-control col-sm-4'])!!}
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <label class="control-label"></label>
                                                                <div class="input-group m-b-30"> <span class="input-group-addon">Tags</span>
                                                                    <div class="bootstrap-tagsinput">
                                                                        {!! Form::text('tags', null, ['class' => 'form-control'])!!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label">Fecha Inicio</label>
                                                                    <div class="input-group">
                                                                        <input type="text" name="fecha_doc_ini" class="form-control mydatepicker" placeholder="dd/mm/yyyy" value="{{Request::input('fecha_doc_ini')}}" > <span class="input-group-addon"><i class="icon-calender"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
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
                                                            <div class="col-md-8">
                                                                <label class="control-label">Detalles</label>
                                                                <div>
                                                                    <textarea class="form-control" id='observaciones' name="detalle" rows="5">{{ Request::input('detalle')}}</textarea>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <br>

                                                        <?php
                                                        $array = array();
                                                        for ($i = 10; $i <= 50; $i+=5) {
                                                            $array[$i] = $i;
                                                        }
                                                        ?>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="control-label">Resultados Por Pagina</label>
                                                                    {{ Form::select('cantidadxpagina', $array,$cantidadxpagina) }}
                                                                </div>
                                                            </div>
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
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <!--<label class="control-label">Buscar </label>-->
                                                                    <button type="submit" id='boton' name='boton' class="btn btn-success"> <i class="fa fa-check"></i> Buscar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{ Form::close() }}
                     </div>
                </div>
                                                @include('sadocumentos.table_find')
             </div>
        </div>
    </div>


                @endsection
                @section('scripts.footer')
                    <link href="{{ url('plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')  }}" rel="stylesheet" />
                    <script src="{{ url('plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>

                    <script>
                        jQuery('.mydatepicker, #datepicker').datepicker({
                                format: 'yyyy-mm-dd'
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


