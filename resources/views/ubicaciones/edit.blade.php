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
                        {!! Form::model($ubicacione, array('method' => 'PUT', 'route' => array('ubicaciones.update', $ubicacione->id))) !!}
                            <div class="form-body">
                                <h3 class="box-title">UBICACIONES</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Nombre</label>
                                            {!! Form::text('nombre', null, ['class' => 'form-control'])!!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Direccion fisica</label>
                                            {!! Form::text('direccion', null, ['class' => 'form-control'])!!}
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
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
@endsection