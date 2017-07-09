@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">Tipo de Documentos  </div>
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
                        {!! Form::model($tipo_documento, array('method' => 'PUT', 'route' => array('tipo-documentos.update', $tipo_documento->id))) !!}
                            {{ csrf_field() }}
                            <div class="form-body">
                                <h3 class="box-title">Editar DOCUMENTO</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Nombre</label>
                                            {!! Form::text('nombre', null, ['class' => 'form-control'])!!}
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection