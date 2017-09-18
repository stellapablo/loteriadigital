@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">Documentos / Secretaria Administrativa </div>
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
                        {!! Form::model($sad, array('method' => 'PUT', 'route' => array('sad-documento.update', $sad->id), 'files'=>'true')) !!}
                            <div class="form-body">
                                <h3 class="box-title">Datos de consultas</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Tipo de documento</label>
                                            {!! Form::select('tipo_documento', $tipos ,  null, ['class' => 'form-control col-sm-4'])!!}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Numero de documento</label>
                                            {!! Form::text('nro_documento', null, ['class' => 'form-control'])!!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Fecha de documento</label>
                                            <div class="input-group">
                                                {!! Form::text('fecha_documento', null, ['class' => 'form-control','id'=>'fecha_documento', 'placeholder' => 'dd/mm/yyyy'])!!}
                                                <span class="input-group-addon"><i class="icon-calender"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Tomo</label>
                                            {!! Form::text('tomo', $sad->tomo, ['class' => 'form-control','disabled' => 'disabled'])!!}
                                            <input type="hidden" name="tomo" value="{{ $sad->tomo }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Ubicación</label>
                                            {!! Form::select('store_id', $ubicaciones ,  null, ['class' => 'form-control col-sm-4'])!!}
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="control-label"></label>
                                        <div class="input-group m-b-30"> <span class="input-group-addon">Tags</span>
                                            <div class="bootstrap-tagsinput">
                                                <input type="text" name="tags"
                                                       value="{{ $sad->hash }}"
                                                       data-role="tagsinput" placeholder="agregar tags">
                                            </div>
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
                            <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Documento a subir:</label>
                                            <div class="input-group">
                                                {!! Form::file('file', null, ['class' => 'form-control'])!!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Documento actual:</label>
                                            <div class="input-group">
                                                <a target="_blank" href="{{ url('storage/'. $sad->tomo.'/'. $sad->archivo) }}">{{ $sad->archivo }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Preview</label>
                                            <div class="input-group">
                                                <object width="400" height="500" data="{{ url('storage/'. $sad->tomo.'/'. $sad->archivo) }}"></object>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Actualizar</button>
                                </div>
                                <div id="contInputs">
                                </div>
                        </div>
                 {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts.footer')
            <link href="{{ url('plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')  }}" rel="stylesheet" />
            <script src="{{ url('plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
            <script>
                $("#fecha_documento").datepicker(
                    { dateFormat: 'yy-mm-dd' }
                );
            </script>
@endsection