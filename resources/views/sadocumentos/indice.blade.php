@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">Documentos / Generar Indice </div>
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
                        <form action="{{ route('sad-documento.indice') }}" enctype="multipart/form-data"  method="POST" >
                            {{ csrf_field() }}
                            <div class="form-body">
                                <h3 class="box-title">Indice</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Seleccione el tomo a generar indice</label>
                                            {!! Form::select('tomo', $tomos ,  null, ['class' => 'form-control col-sm-4'])!!}
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Generar</button>
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
        @endsection