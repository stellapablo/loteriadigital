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
                        <form action="{{ route('sad-documento.store') }}" enctype="multipart/form-data"  method="POST" >
                            {{ csrf_field() }}
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
                                                {!! Form::text('fecha_documento', null, ['class' => 'form-control mydatepicker', 'placeholder' => 'dd/mm/yyyy'])!!}
                                                <span class="input-group-addon"><i class="icon-calender"></i></span>
                                            </div>
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
                                                <input type="text" name="tags" data-role="tagsinput" placeholder="agregar tags" style="display: none;">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
    <script>

        Dropzone.options.addDoc = {
            paramName: 'file',
            addRemoveLinks: true,
            maxFiles: 2,
            dictDefaultMessage: 'Arrastre el documento que desea guardar',
            dictCancelUpload: true,
            dictRemoveFile: 'Eliminar',
            // The setting up of the dropzone
            init: function () {
                var i = 0;
                var fileList = new Array;
                this.on("success", function (file, serverFileName) {
                    //fileList[file.name] = file.name;
                    //console.log(serverFileName);
                    //var obj = JSON.parse(serverFileName);
                    //console.log(serverFileName); // <---- here is your filename

                    $("#contInputs").append('<input type="hidden" name="valor[' + serverFileName + ']" id="valor[' + serverFileName + ']" value="' + serverFileName + '"  > ');

                });
                this.on("removedfile", function (file) {
                    //console.log(file.xhr.responseText);
                    var valor = document.getElementById('valor[' + file.xhr.responseText + ']');
                    valor.remove();
                    //$('valor['+file.name+']').remove();
                    $.ajax({
                        type: 'POST',
                        url: 'upload/delete',
                        data: {file: file.xhr.responseText, _token: $("input[name=_token]").val()},
                        dataType: 'html',
                        success: function (data) {
                        }
                    });

                });
            },
            error: function (file, response) {
                if ($.type(response) === "string")
                    var message = response; //dropzone sends it's own error messages in string
                else
                    var message = response.message;
                file.previewElement.classList.add("dz-error");
                _ref = file.previewElement.querySelectorAll("[data-dz-errormessage]");
                _results = [];
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i];
                    _results.push(node.textContent = message);
                }
                return _results;
            },
        }
    </script>
    <script>
        jQuery('.mydatepicker, #datepicker').datepicker({
                format: 'yyyy-mm-dd'
            }
        );
    </script>
@endsection