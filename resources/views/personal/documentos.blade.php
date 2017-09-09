@extends('layouts.master')
@section('content')

    <!-- /row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-inverse ">
                <div class="panel-heading"><strong>{{ $personal->nombre }}, {{ $personal->apellido }}</strong>
                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                </div>
            </div>
            <div class="white-box">
                <div class="table-responsive">
                    <div class="white-box">
                        <div class="table-responsive">
                            <table class="table color-table red-table">
                                <thead>
                                <tr>
                                  <td>Seccion</td>
                                  <td>Fecha</td>
                                  <td>Detalle</td>
                                  <td>Archivo</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($documentos as $row)
                                    <tr>
                                            <td>{{ getSeccion($row->seccion_id) }}</td>
                                            <td>{{ $row->created_at->format('d/m/Y') }}</td>
                                            <td>{{ $row->detalle }}</td>
                                            <td>{{ $row->archivo }}</td>
                                            <td>
                                                <a about="_blank" href="{{ url('storage_rrhh/'. getSeccion($row->seccion_id).'/'. $row->archivo) }}" ><div class="col-sm-6 col-md-4 col-lg-3"> <i title="Ver" class="ti-download"></i></div></a>
                                            </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection
@section('scripts.footer')
    <script src="{{ url('plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js') }}"></script>
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js') }}"></script>
    <script src="{{ url('https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js') }}"></script>
    <script src="{{ url('https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js') }}"></script>
    <script>

        $(document).ready(function () {
            $('#myTable').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": false,
                "oLanguage": {
                    "sSearch": "Filtro: ",
                    "sInfoEmpty": 'No hay registros que mostrar ',
                    "sInfo": 'Mostrando _END_ filas.',
                }
            });
        });


    </script>
@endsection


