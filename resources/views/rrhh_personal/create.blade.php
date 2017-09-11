@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">Documentos / Recursos Humanos </div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">

                        @include('flash::message')


                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @include('layouts.flash')
                        <form action="{{ route('rrhh-documento.store') }}" enctype="multipart/form-data"  method="POST" >
                            {{ csrf_field() }}
                            <div class="form-body">
                                <h3 class="box-title">Datos de carga</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="control-label">Personal</label>
                                            {!! Form::text('personal_id' ,null, ['class' => 'form-control col-sm-4','id'=>'personal_id'])!!}
                                            <input type="hidden" name="id_personal" id="id_personal" >
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="control-label">Fecha de documento</label>
                                            <div class="input-group">
                                                {!! Form::text('fecha_documento', null, ['class' => 'form-control mydatepicker', 'placeholder' => 'dd/mm/yyyy'])!!}
                                                <span class="input-group-addon"><i class="icon-calender"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="control-label">Ubicación</label>
                                            {!! Form::select('store_id', $ubicaciones ,  null, ['class' => 'form-control col-sm-4'])!!}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Sección</label>
                                            {!! Form::select('seccion_id', $secciones ,  null, ['class' => 'form-control col-sm-4'])!!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <label class="control-label">Detalle del documento</label>
                                        <div>
                                            {{ Form::textarea('detalle',null,['class'=>'form-control','rows'=>'5']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Documento a subir:</label>
                                            <div class="input-group">
                                                {!! Form::file('file', null, ['class' => 'form-control'])!!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Guardar</button>
                                </div>
                                <div id="contInputs">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        @endsection
        @section('scripts.footer')
            <link href="{{ url('plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')  }}" rel="stylesheet" />
            <script src="{{ url('plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>

            <script>
                $('#personal_id').autocomplete({
                    source: function (request, response) {
                        $.ajax({
                            type: 'POST',
                            url: 'autocompletar',
                            dataType: "json",
                            data: {
                                term: $('#personal_id').val()
                            },
                            success: function (data) {
                                response(data);
                            }
                        });
                },
                    select: function(event, ui) {
                        $("#id_personal").val(ui.item.id);
                    }
                });
                    </script>
            <script>
                jQuery('.mydatepicker, #datepicker').datepicker({
                        format: 'yyyy-mm-dd'
                    }
                );
            </script>
@endsection