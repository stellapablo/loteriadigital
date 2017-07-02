@extends('layouts.master')
@section('content')

    <!-- /row -->

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-warning">
                <div class="panel-heading"> Digitalizaciones REALIZADAS
                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
                </div>
            </div>
            <div class="white-box">
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped">
                        <thead>
                        <tr>
                            <th>ACTA</th>
                            <th>Tipo de documento</th>
                            <th>Oficina</th>
                            <th>Fecha de carga</th>
                            <th>Usuario</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($documentos as $row)
                                <tr>
                                    <td>{{ $row->numero }}</td>
                                    <td>{{ $row->tipo }}</td>
                                    <td>{{ $row->oficina }}</td>
                                    <td>{{ $row->created_at }}</td>
                                    <td>{{ $row->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
                "paging": false,
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
            $(document).ready(function () {
                var table = $('#example').DataTable({
                    "columnDefs": [
                        {
                            "visible": false
                            , "targets": 2
                        }
                    ]
                    , "order": [[2, 'asc']]
                    , "displayLength": 25
                    , "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
            });
        });


    </script>
@endsection


