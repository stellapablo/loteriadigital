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
                        <form action="{{ route('personal.store') }}" method="POST" >
                        <div class="form-body">
                            <h3 class="box-title">PERSONAL</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">DNI</label>
                                        {!! Form::text('dni', null, ['class' => 'form-control'])!!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Lugar</label>
                                        {!! Form::text('lugar', null, ['class' => 'form-control'])!!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Apellido</label>
                                        {!! Form::text('apellido', null, ['class' => 'form-control'])!!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Nombre</label>
                                        {!! Form::text('nombre', null, ['class' => 'form-control'])!!}
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